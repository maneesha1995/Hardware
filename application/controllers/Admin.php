<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 1/6/2018
 * Time: 3:07 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('ProductModel');
    }
    public function index(){
        $this->load->view('dashboard');
    }
    //view functions****************************************************************************************************
    public function ViewCement(){
        $this->load->model('ProductModel');
        $val['cement_array']=$this->ProductModel->ViewCement();
        $val['item_array']=$this->ProductModel->ViewitemCement();
        $this->load->view('cement',$val);
    }
    public function Viewhousehold(){
        $this->load->model('ProductModel');
        $val['cement_array']=$this->ProductModel->ViewHousehold();
        $val['item_array']=$this->ProductModel->ViewitemHousehold();
        $this->load->view('household',$val);
    }
    public function itemtype(){
        $this->load->model('ProductModel');
        $val['cement_array']=$this->ProductModel->ViewItemType();
        $this->load->view('itemtype',$val);
    }




//insert functions******************************************************************************************************
    public function AddItem (){
        $this->form_validation->set_rules('name', 'Item Name', 'required');
        $this->form_validation->set_rules('category', 'Item Category', 'required');
        $this->form_validation->set_rules('des', 'Description');
        $this->form_validation->set_rules('qty', 'Quantity', 'required');
        $this->form_validation->set_rules('price', 'Buying Price', 'required');
        $this->form_validation->set_rules('sprice', 'Selling Price', 'required');


        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('dashboard');
        }
        else
        {
            $this->load->model('ProductModel');
            $response=$this->ProductModel->InsertProductData();
            if ($response){
                $this->session->set_flashdata('msg','Record enterd successfully.');
                redirect('Admin/index');
            }else{
                $this->session->set_flashdata('msg','Sorry.Something went wrong.');
                redirect('Admin/index');
            }
        }
    }

    public function AddItemType (){
        $this->form_validation->set_rules('name', 'Item Type Name', 'required');
        $this->form_validation->set_rules('category', 'Item Category', 'required');



        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('itemtype');
        }
        else
        {
            $this->load->model('ProductModel');
            $response=$this->ProductModel->InsertItemData();
            if ($response){
                $this->session->set_flashdata('msg','Record enterd successfully.');
                redirect('Admin/itemtype');
            }else{
                $this->session->set_flashdata('msg','Sorry.Something went wrong.');
                redirect('Admin/itemtype');
            }
        }
    }




//update functions******************************************************************************************************
public function EditProduct($Product_ID){
    $this->load->model('ProductModel');

    if (isset($_POST['update'])) {

        if ($this->ProductModel->UpdateProduct($Product_ID)) {

            $this->session->set_flashdata('success','Student is updated');
            redirect('Admin/EditProduct/'.$Product_ID, 'refresh');

        } else {
            $this->session->set_flashdata('error','Student is not updated');
            redirect('Admin/EditProduct/'.$Product_ID , 'refresh');
        }
    }

    $data['row'] = $this->ProductModel->edit($Product_ID);
    $this->load->view('editproduct',$data);

}

//    public function updateProduct($Product_ID){
//
//
//        if (isset($_POST['update'])) {
//
//            if ($this->ProductModel->UpdateProduct($Product_ID)) {
//
//                $this->session->set_flashdata('success','Student is updated');
//                redirect('Admin/EditProduct/'.$Product_ID, 'refresh');
//
//            } else {
//                $this->session->set_flashdata('error','Student is not updated');
//                redirect('Admin/EditProduct/'.$Product_ID , 'refresh');
//            }
//        }
//
//
//        $this->load->view('cement');
//
//    }





//delete functions******************************************************************************************************
    public function deleteproduct($Product_ID) {

        $this->load->model('ProductModel');
        $this->ProductModel->deleteproduct($Product_ID);
        redirect('Admin/ViewCement' , 'refresh');

    }
    public function deleteitemtype($Product_ID) {

        $this->load->model('ProductModel');
        $this->ProductModel->deleteitem($Product_ID);
        redirect('Admin/itemtype' , 'refresh');

    }


//search function*******************************************************************************************************

//search item

//public function search(){
//    if(isset($_GET['submit'])){
//        $this->load->model('ProductModel');
//        $result=$this->ProductModel->SearchItem($_GET['name']);
//        if(count($result)>0){
//            foreach($result as $pr){
//                $arr_result[]=$pr->Type_Name;
//                echo json_encode($arr_result);
//
//    }
//
//        }
//
//    }
//}

    public function GetItemName(){
        $keyword=$this->input->post('keyword');
        $data=$this->ProductModel->GetRow($keyword);
        echo json_encode($data);
    }
}