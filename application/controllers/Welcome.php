<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
                $this->load->model('new_models');
	}

	public function index()
	{
		$this->load->view('welcome_message');
		$parametro=array('Email'=>'jr_fabao@hotmail.com', 'CPF'=> '000.000.000.00');

		$this->new_models->insert($parametro);

	}
}
