<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 1/11/2018
 * Time: 11:26 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Rent extends CI_Controller
{
    public function index()
    {
        $this->load->view('ViewRent');
    }

    public function AddItem()
    {
        $this->form_validation->set_rules('name', 'Item Name', 'required');

        $this->form_validation->set_rules('des', 'Description');
//        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('ViewRent');
        } else {
            $this->load->model('RentModel');
            $response = $this->RentModel->InsertRentData();
            if ($response) {
                $this->session->set_flashdata('msg', 'Record enterd successfully.');
                redirect('Rent/index');
            } else {
                $this->session->set_flashdata('msg', 'Sorry.Something went wrong.');
                redirect('Rent/index');
            }
        }
    }

//view data

    public function ViewItem()
    {
        $this->load->model('RentModel');
        $val['rent_array'] = $this->RentModel->Viewitem();

        $this->load->view('ViewRent', $val);
    }
    public function RentCustomer()
    {
//        $this->load->model('RentModel');
//        $val['rent_array'] = $this->RentModel->Viewitem();

        $this->load->view('RentCustomer');
    }

    //delete functions
    public function DeleteItem($Product_ID)
    {

        $this->load->model('RentModel');
        $this->RentModel->deleteitem($Product_ID);
        redirect('Admin', 'refresh');

    }

//update functions

    public function update_data()
    {
        $item_id = $this->uri->segment(3);
        $this->load->model('RentModel');
        $data['rent_array'] = $this->RentModel->fetch_data($item_id);
        $this->load->view('ViewRent', $data);
    }

//add person
    public function AddRentItem($Rent_ID)
    {
        $this->load->model('RentModel');

//        if (isset($_POST['update'])) {
//
//            if ($this->ProductModel->UpdateProduct($Rent_ID)) {
//
//                $this->session->set_flashdata('success', 'Student is updated');
//                redirect('Admin/EditProduct/' . $Rent_ID, 'refresh');
//
//            } else {
//                $this->session->set_flashdata('error', 'Student is not updated');
//                redirect('Admin/EditProduct/' . $Rent_ID, 'refresh');
//            }
//        }

        $data['row'] = $this->RentModel->edit($Rent_ID);
        $this->load->view('editrent', $data);

    }
    public function AddPerson()
    {
        $this->form_validation->set_rules('cname', 'Customer Name', 'required');

        $this->form_validation->set_rules('nic', 'NIC' ,'required');

        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('tel', 'Contact Number', 'required');

//        $this->form_validation->set_rules('vehicle', 'Vehicle No');
//
//        $this->form_validation->set_rules('deposit', 'Deposit', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('ViewRent');
        } else {
            $this->load->model('RentModel');
            $response = $this->RentModel->InsertPersonData();
            if ($response) {
                $this->session->set_flashdata('msg', 'Record enterd successfully.');
                redirect('Rent/ViewItem');
            } else {
                $this->session->set_flashdata('msg', 'Sorry.Something went wrong.');
                redirect('Rent/ViewItem');
            }
        }
    }


}