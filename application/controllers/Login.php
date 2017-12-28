<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct()
	 {
		 parent::__construct();
		 $this->load->model('user_model', 'user');
		 $this->load->library('session');
	 }
	public function index()
	{
		$this->load->view('login_page');
	}

	public function signin(){
		$username 			= $this->input->post('username');
		$password 			= $this->input->post('password');

		if(empty($username) || empty($password)){
			redirect('login/index');
		}

		$password   		= md5($password);
		$user_data 			= $this->user->do_login($username,$password); //var_dump($user_data);die;
		// $data['user_data'] 	= $user_data;
		if($user_data != NULL){
			$this->session->set_userdata('user_data',$user_data);
			redirect('welcome/user');
		}else{
			redirect('login/index');
		}
		// $this->load->view('welcome_message',$data);
		
	}

	public function logout(){
		$this->session->unset_userdata('user_data');
		redirect(base_url().'welcome/index');
	}
}