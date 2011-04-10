<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends App_Controller {

	/**
	 * Dashboard overview of everything
	 */
	public function index()
	{
		// TODO: put header here
		$this->load->view('header_with_sidebar');
		
		// show recently viewed customers
		$this->load->model('log');
		$data['recent'] = $this->log->recently_viewed($this->session->userdata('user_name'));
		$this->load->view('recently_viewed', $data);
		
		$this->load->view('messagetabs');
		
		$this->load->view('buttonbar');
		
		$this->load->view('searchbox');
		
		// include module searches below here		
		
		
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */