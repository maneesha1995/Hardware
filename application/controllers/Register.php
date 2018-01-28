<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 1/4/2018
 * Time: 10:19 PM
 */

class Register extends CI_Controller
{
    public function RegisterUser(){
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('nic', 'NIC', 'required|is_unique[login.NIC]');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('contact', 'Contact Number', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[login.Email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('re_password', 'Password Confirmation', 'trim|required|matches[password]');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('register');
        }
        else
        {
           $this->load->model('UserModel');
           $response=$this->UserModel->InsertUserData();
           if ($response){
               $this->session->set_flashdata('msg','Registerd Succesfully.Please Login to continue.');
               redirect('Welcome');
           }else{
               $this->session->set_flashdata('msg','Sorry.Something went wrong.');
               redirect('Welcome');
           }
        }
    }


}