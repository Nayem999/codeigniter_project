<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jewellery extends CI_Controller {
	public function index()
	{
		$this->load->view('jewellery_view');
    }
    
public function diamond(){
	if(! $this->session->userdata('authenticated')) {
		redirect('users/login');
		
	}
	$this->load->view('product/dimond');

}
public function gold(){
	if(! $this->session->userdata('authenticated')) {
		redirect('users/login');
		
	}
	$this->load->view('product/gold');
}
public function silver(){
	if(! $this->session->userdata('authenticated')) {
		redirect('users/login');
		
	}
	$this->load->view('product/silver');
}

public function earings(){
	if(! $this->session->userdata('authenticated')) {
		redirect('users/login');
		
	}
	$this->load->view('product/earing');
}

public function necklace(){
	if(! $this->session->userdata('authenticated')) {
		redirect('users/login');
		
	}
	$this->load->view('product/necklace');
}

public function bangles(){
	if(! $this->session->userdata('authenticated')) {
		redirect('users/login');
		
	}
	$this->load->view('product/bangles');
}

public function address(){

	$this->load->view('product/address');
}


}
