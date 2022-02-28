<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper(array('auth/login_rules'));
        $this->load->database();
    }

	 public function login()
	{
		$this->load->view('logcodigo/loginuser');
	}
	public function register()
	{
		$this->load->view('logcodigo/register');
	}

	public function index()
	{
		$this->load->view('logcodigo/dashboardusr');
	}

	function admin()
	{
		$this->load->view('sistemas/administracion');
	}

	function alumnos()
	{
		$this->load->view('sistemas/alumnos');
	}

	function logout()
	{
		session_start();
		session_unset();
        session_destroy();
		header("location: login");
	}
}
?>