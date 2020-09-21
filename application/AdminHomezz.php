<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminHome extends CI_Controller
{

	public function index()
	{
		$this->load->view('admin');
		$this->load->helper('url');
	}
}