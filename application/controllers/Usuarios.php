<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->model('welcome_model', 'welcome');
       
    }
	public function index()
	{	
		
		$this->welcome->cargar();
		$data['lista_p']=$this->welcome->get_lista_publicaciones();

		$this->load->view('base/header.php');
		$this->load->view('usuarios/usuarios',$data);
		$this->load->view('base/footer.php');
	}
	public function perfil()
	{	 
		
		$this->welcome->cargar();
		$data['lista_p']=$this->welcome->get_lista_publicaciones();

		$this->load->view('base/header.php');
		$this->load->view('usuarios/perfil',$data);
		$this->load->view('base/footer.php');
	}
	public function publicar1(){
		$this->welcome->cargar();
		if($_POST['share']!=null && $_POST['share']!="" ){
			$data=array();
			$data['texto']=$_POST['share'];
			$data['usuario_publica']=$_SESSION['user_var']->id;
			$data['fecha']=date("Y-m-d H:i:s");
			$this->db->insert("publicacion",$data);
			
		}

		header("Location: ".base_url());
		die();

		
	}
	public function reaccionar(){
		$reaccion=$this->db->get_where("reacciones_a_publicacion",array("id_usuario_reacciona"=>$_SESSION['user_var']->id,"id_publicacion"=>$_POST['id_publicacion'],"id_reaccion"=>$_POST['id_reaccion']))->row();
			if(empty($reaccion)){
				$this->db->insert("reacciones_a_publicacion",array("id_usuario_reacciona"=>$_SESSION['user_var']->id,"id_publicacion"=>$_POST['id_publicacion'],"id_reaccion"=>$_POST['id_reaccion']));		
			}
		
		
		$numero=$this->welcome->get_reacciones($_POST['id_publicacion']);
		echo json_encode(array("numero_iterezantes"=>$numero));
	}
	public function views(){
		$vista=$this->db->get_where("view_user_publicacion",array("id_usuario"=>$_SESSION['user_var']->id,"id_publicacion"=>$_POST['id_publicacion']))->row();
		$count=1;
		$diff_in_seconds=1;
		if(isset($vista)){
			$count=$vista->conteo;
			$count++;
			
			$date_now=date("Y-m-d H:i:s");

			$fecha_last_datetime = new DateTime($vista->fecha);
				$date_now_datetime = new DateTime();

				// Calcular la diferencia en minutos
				$interval = $date_now_datetime->diff($fecha_last_datetime);
$diff_in_seconds = $interval->h * 60 + $interval->i;

				// Comparar la diferencia
				if ($diff_in_seconds >= 30) {
					$this->db->update("view_user_publicacion",array("conteo"=>$count,"fecha"=>$date_now),array("id"=>$vista->id));	
				}
			
		}else{
			$this->db->insert("view_user_publicacion",array("id_publicacion"=>$_POST['id_publicacion'],"id_usuario"=>$_SESSION['user_var']->id,"conteo"=>1,"fecha"=>date("Y-m-d H:i:s")));
		}
		$numero=$this->welcome->get_vistas($_POST['id_publicacion']);
		echo json_encode(array("conteo"=>$numero,"s"=>$diff_in_seconds,"id"=>$vista->id,"fe"=>$date_now_datetime->format("Y-m-d H:i:s")));
	}


}
