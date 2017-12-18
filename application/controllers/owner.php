<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 10/29/2017
 * Time: 3:53 AM
 */

class owner extends CI_Controller
{
    public function index()
    {
        $num['numOFcustomers']=$this->getNumberOfcustomers();
        $this->load->view('owner/admin_page',$num);

    }

public function loadBillView()
{
    //echo "loadBillView";
    $this->load->view('owner/Bill/Bill');
}
public function loadEditCustomersView()
{
    //echo "loadEditCustomersView";
    $this->load->view('owner/EditCustomers/Customers');
}
    public function loadOrdersView()
    {
        $this->load->model('order_model');

        $data['feedback']  =$this->order_model->getOrderData();
        $data['ordermenu'] =$this->order_model->getOrderDataA();
        $this->load->view('owner/Orders/Orders',$data);

        // $this->load->view('owner/Orders/Orders');
    }

public function loadEditMenuView()
{
    //echo "loadEditMenuView";
    $this->load->view('owner/EditMenu/Menu');
}
    public function getNumberOfcustomers(){
        $this->load->model('order_model');
        $num=$this->order_model->getNumberOfCustomers();
        return $num;
    }


}