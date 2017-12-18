<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 10/27/2017
 * Time: 11:22 PM
 */

class register extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
            $this->load->helper(array("url","form"));
            $this->load->library(array("session","form_validation"));


    }

    public function addUser(){
    //echo ("register controller");
    $this->form_validation->set_rules('userName', 'Username', 'required');
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('nic', 'Name', 'required');
    $this->form_validation->set_rules('phoneNumber', 'Phone Number', 'required|is_natural');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('conformPassword', 'Conform Password', 'required|matches[password]');
    if ($this->form_validation->run() == FALSE)
    {
        $this->load->view('home_Page');
    }
    else
    {
        $this->load->model('user_model');
        $responce=$this->user_model->registerUser();
        if($responce){
            $this->session->set_flashdata('msg','registered successfully');
            redirect('Home/index');
        }
        else{
            $this->session->set_flashdata('msg','something went wrong');
            redirect('Home/index');
        }

        //$this->load->view('formsuccess');
    }

}
public function addOrder() {
    $this->load->model( 'ordermenu' );
    $this->order->registerOrder();
    $this->session->set_flashdata('success','your ordermenu has been submitted');
    $this->load->view('admin/dashboard');
}

}