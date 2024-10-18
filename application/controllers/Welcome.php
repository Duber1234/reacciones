<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('welcome_message',$data);
		$this->load->view('base/footer.php');
	}
	public function publicar1(){
		
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
	public function publicar2(){
		
		$this->welcome->cargar();
		if($_GET['share']!=null && $_GET['share']!="" ){
			$data=array();
			$data['texto']=$_GET['share'];
			$data['usuario_publica']=$_SESSION['user_var']->id;
			$data['fecha']=date("Y-m-d H:i:s");
			$this->db->insert("publicacion",$data);
			echo json_encode(array("message"=>"publicado"));
		}

		
	}
	public function perfil(){
		$this->welcome->cargar();
		$data['lista_p']=$this->welcome->get_lista_publicaciones();

		$this->load->view('base/header.php');
		$this->load->view('perfil',$data);
		$this->load->view('base/footer.php');
	}

}
