<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 10/28/2017
 * Time: 7:11 PM
 */

class admin extends CI_Controller{
public function index()
{
	$this->load->model('menu'); //load the name of the model
	$data['records1'] = $this->menu->getBreakfast();
	$data['records2'] = $this->menu->getLunch();
	$data['records3'] = $this->menu->getEvening();
	$data['records4'] = $this->menu->getShorteats();
	$data['records5'] = $this->menu->getBeverages();

	$this->load->view('admin/dashboard',$data);
}
}