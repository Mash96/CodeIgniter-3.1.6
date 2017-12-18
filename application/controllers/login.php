<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 10/28/2017
 * Time: 1:23 PM
 */

class login extends CI_Controller{
public function loginUser(){



    $this->form_validation->set_rules('singInUserName', 'Username', 'required');
    $this->form_validation->set_rules('singInPassword', 'Password', 'required');

    if ($this->form_validation->run() == FALSE)
    {
        $this->load->view('home_Page');
    }
    else
    {
        $this->load->model('user_model');
        $responce=$this->user_model->loginUser();
        if($responce!=false){
            $this->session->set_flashdata('msglogin','logging successfully');
            $userdata=array(
                'userName'=>$responce->userName,
                'name'=>$responce->name,
                'nic'=>$responce->nic,
                'phoneNumber'=>$responce->phoneNumber,
                'status'=>$responce->status,
                'loggedin'=>TRUE
            );
            $this->session->set_userdata($userdata);
            if($responce->status=='customer'){
                redirect('admin/index');
            }
            else if($responce->status=='admin'){
                redirect('owner/index');
            }

        }
        else{
            $this->session->set_flashdata('errmsglogin','Wrong Username or password');
            redirect('Home/index');
        }


    }
}
public function logoutUser(){
    $this->session->unset_userdata('userName');
    $this->session->unset_userdata('name');
    $this->session->unset_userdata('nic');
    $this->session->unset_userdata('phoneNumber');
    $this->session->unset_userdata('loggedin');
    redirect('Home/index');


}

}