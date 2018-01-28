<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

    public function index()
    {
        echo "Hello everyone";
//        $this->load->view('welcome_message');
    }
    public function test_index()
    {
//             $this->load->model('TestModel');
//             $firstname=$this->TestModel->firstname();
//             echo "your first name is = ".$firstname;

        $this->load->model('Authentication_from_google','google');//'google' creates an obj to minimise the large text. so can use it in future
        $firstname=$this->google->userData();
        echo "your first name is = ".$firstname;

    }
}

?>