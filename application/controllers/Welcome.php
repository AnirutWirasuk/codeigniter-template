<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('template');
	}
	public function index(){
		$data = array();
		$this->template->css(array(
				"assets/css/style"
			));
		$this->template->js(array(
				"assets/css/javascript"
			));
		$this->template->backend("welcome_message",$data);
	}
}
