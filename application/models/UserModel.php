<?php

class UserModel extends CI_Model {
//    public function return_users (){
////        return ["ID"=>"user12","User Name"=>"Maneesha"];
//        $this->load->database();
//        $select_query=$this->db->query('SELECT * FROM contact');
//        $array=$select_query->result_array();
//        print_r($array);
//    }
//
//    public function contact (){
//       $this->load->database();
//       $select_query=$this->db->query('SELECT * FROM contact');
//        $array=$select_query->result_array();
////        print_r($array);
//        return $array;
//    }
    function InsertUserData (){
        /*
         * Insert data into database
         * */
       $data=array(
            'First_Name' => $this->input->post('fname',TRUE),
            'Last_Name' => $this->input->post('lname',TRUE),
            'NIC' => $this->input->post('nic',TRUE),
            'Address' => $this->input->post('address',TRUE),
            'Contact' => $this->input->post('contact',TRUE),
            'Email' => $this->input->post('email',TRUE),
            'Password' =>($this->input->post('password',TRUE))
       );

       return $this->db->insert('login',$data);
    }

    function LoginUser (){
        /*to check the availability in db
         if exist create session
        else errors
        */
        $email= $this->input->post('email');
        $password=($this->input->post('password'));

        $this->db->where('Email',$email);//fetch data fro the database
        $this->db->where('Password',$password);//fetch data from the dataase
        //select the particuular table
        $respond=$this->db->get('login');
        //ceck availablity of data
        if ($respond->num_rows()==1){
            return $respond->row(0);

        }else{
            return false;

        }

    }
}

?>