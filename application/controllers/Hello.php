<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

	public function index()
	{
		$this->load->view('hello_view');
	}

	public function about_me()
	{
		$this->load->view('about_me');
	}

	public function education()
	{
		$this->load->view('education');
	}

	public function active()
	{
		$this->load->view('active');
	}
}
