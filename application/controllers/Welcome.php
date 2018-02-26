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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('m_befbuy');
        $data["category"] = $this->m_befbuy->get_categories(); //get array including all categories info
		$this->load->view('generic-eng/header');
		$this->load->view('generic-eng/navbar');
		$this->load->view('generic-eng/search');
		$this->load->view('home-eng/categories', $data);
	}

}
