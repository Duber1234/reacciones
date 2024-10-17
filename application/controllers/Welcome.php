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
	public function index()
	{	
		$this->load->model('welcome_model', 'welcome');
		$data['ip']=$this->welcome->get_ip();
		$user=$this->db->get_where("usuarios",array("ip"=>$data['ip']) )->row();	
		if(empty($user)){
			//crear un row
			$data=array("ip"=>$data['ip']);
			$this->db->insert("usuarios",$data);
			$user=$this->db->get_where("usuarios",array("ip"=>$data['ip']) )->row();
			$_SESSION['user_var']=$user;
		}else{
			$_SESSION['user_var']=$user;
		}
		$this->load->view('base/header.php');
		$this->load->view('welcome_message',$data);
		$this->load->view('base/footer.php');
	}
	public function hola(){
		$this->load->view('base/header.php');
		$this->load->view('base/footer.php');
	}

}
