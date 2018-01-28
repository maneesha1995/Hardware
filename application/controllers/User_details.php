<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_details extends CI_Controller {

    function index()
    {
        $this->load->model('UserModel');
        $data['user_array']=$this->UserModel->return_users();
        $this->load->view('user_view',$data);

    }

    function contact_details()
    {
        $this->load->model('UserModel');
        $val['contact_array']=$this->UserModel->contact();
        $this->load->view('user_view',$val);

    }

}

?>