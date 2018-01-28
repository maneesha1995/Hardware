<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 1/9/2018
 * Time: 12:57 PM
 */

class Contact extends CI_Controller
{
    public function ViewContactData(){
        $this->load->model('ContactData');
        $val['contact_array']=$this->ContactData->ViewContact();

        $this->load->view('ViewContact',$val);
    }


    public function AddItem (){
        $this->form_validation->set_rules('name', 'Contact Name', 'required');
        $this->form_validation->set_rules('num1', 'Contact Number ', 'required');
        $this->form_validation->set_rules('num2', 'Contact Number');
        $this->form_validation->set_rules('email', 'Email', 'valid_email');
        $this->form_validation->set_rules('address', 'Address');


        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('dashboard');
        }
        else
        {
            $this->load->model('ContactData');
            $response=$this->ContactData->InsertContactData();
            if ($response){
                $this->session->set_flashdata('msg','Record enterd successfully.');
                redirect('Admin/index');
            }else{
                $this->session->set_flashdata('msg','Sorry.Something went wrong.');
                redirect('Admin/index');
            }
        }
    }
}