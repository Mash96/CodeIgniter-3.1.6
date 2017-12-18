<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 10/28/2017
 * Time: 12:51 AM
 */

class user_model extends CI_Model{

    public function registerUser(){
      $data=array(
            'userName'=>$this->input->post('userName',TRUE),
            'name'=>$this->input->post('name',TRUE),
            'nic'=>$this->input->post('nic',TRUE),
            'phoneNumber'=>$this->input->post('phoneNumber',TRUE),
            'status'=>'customer',
            'password'=>sha1($this->input->post('password',TRUE))

      );

      return $this->db->insert('user',$data);



}
    public function loginUser()
    {
        $userName=$this->input->post('singInUserName',TRUE);
        $password=sha1($this->input->post('singInPassword',TRUE));
        $this->db->where('userName',$userName);
        $this->db->where('password',$password);
        $respond=$this->db->get('user');


        if($respond->num_rows()==1){
            return $respond->row(0);
            die();
        }else{
            return false;
            die();

        }
       // return false;
    }


}