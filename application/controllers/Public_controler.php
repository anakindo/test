<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Public_controler extends CI_Controller {
	function __construct(){
		parent:: __construct();
	}
	function index(){
		$data['title'] 	= 'PT Asia Resource System - IT Solution Provider';
		$data ['main'] 	= 'front/part/home.php';
		$this->load->view('front/index',$data);
	}
	public function team (){
		$data['title'] 	= 'PT Asia Resource System - IT Solution Provider';
		$data ['main'] 	= 'front/part/team.php';
		$this->load->view('front/index',$data);
	}
	public function about (){
		$data['title'] 	= 'PT Asia Resource System - IT Solution Provider';
		$data ['main'] 	= 'front/part/about.php';
		$this->load->view('front/index',$data);
	}
	public function contact (){
		$data['title'] 	= 'PT Asia Resource System - IT Solution Provider';
		$data ['main'] 	= 'front/part/contact.php';
		$this->load->view('front/index',$data);
	}

}
?>