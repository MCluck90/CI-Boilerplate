<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		// The title of the page
		$data['title'] = 'Home';
		
		// 'content' is the name of the view you wish to load
		$data['content'] = 'home';
		
		$this->load->view('template', $data);
	}
}

?>