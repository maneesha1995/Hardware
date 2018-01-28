<?php


class Login extends CI_Controller
{
    public function LoginUser (){
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('login');//load if false
        }
        else
        {
            $this->load->model('UserModel');
            $result=$this->UserModel->LoginUser();
            if ($result!=false){
                //session set
                $user_data=array(
                    //'var name'=>$result->feild name in db
                   'user_id'=>$result->NIC,
                    'fname'=>$result->First_Name,
                    'lname'=>$result->Last_Name,
                    'email'=>$result->Email,
                    'loggedin'=>TRUE // to check whether logged or not
                );
                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('welcome','Welcome!');
                redirect('Admin/index');

            }else{
                //error
                $this->session->set_flashdata('errmsg','No Acccount found.Try again');
                redirect('Welcome/login');
            }
        }
    }

    public function LogoutUser (){
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('fname');
        $this->session->unset_userdata('lname');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('loggedin');
        redirect('Welcome');
    }
}