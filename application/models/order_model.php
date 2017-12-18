<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 11/1/2017
 * Time: 9:31 PM
 */

class order_model extends CI_Model
{
    public function getOrderData()
    {
        $query=$this->db->get('feedback');
        return $query;
    }
    public function getOrderDataA()
    {
        $query=$this->db->get( 'ordermenu' );
        return $query;
    }
    public function updateActorAttribute($username,$order_id,$food_id,$actor)
    {
        //$this->db->query('');
        if($actor=='true'){
            $data=array('actor'=>'false');
        }
        else if($actor=='false'){
            $data=array('actor'=>'true');
        }

        $this->db->where('username', $username);
        $this->db->where('order_id', $order_id);
        $this->db->where('food_id', $food_id);
        $this->db->update('feedback',$data);
    }
    public function updateActorAttributeA($username,$order_id,$food_id,$actor)
    {
        //$this->db->query('');
        if($actor=='true'){
            $data=array('actor'=>'false');
        }
        else if($actor=='false'){
            $data=array('actor'=>'true');
        }

        $this->db->where('username', $username);
        $this->db->where('order_id', $order_id);
        $this->db->where('food_id', $food_id);
        $this->db->update( 'ordermenu',$data);
    }


    public function getNumberOfCustomers(){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('status','customer');
        $query=$this->db->get();
        return $query->num_rows();

    }

}