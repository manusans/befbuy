<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function category($category)
	{
		$this->load->model('m_befbuy');
		$data["products"] = $this->m_befbuy->get_products_category($category); //get array including all products for a given category
		$data["subcategories"] = $this->m_befbuy->get_subcategories($category); // get all subcategories for a given category
		$this->load->view('generic-eng/header');
		$this->load->view('generic-eng/navbar');
		$this->load->view('generic-eng/search');
		$this->load->view('category-eng/filters', $data); //filter to select a subcategory
		#$this->load->view('category-eng/products',$data); // list of all the products for category
	}

	public function subcategory($subcategory)
	{
		$this->load->model('m_befbuy');
		$data["product"] = $this->m_befbuy->get_products_subcategory($subcategory); //get array including all products for category

	}
}
