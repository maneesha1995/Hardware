<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 1/9/2018
 * Time: 12:55 PM
 */

class ContactData extends CI_Model
{

    public function InsertContactData(){
        /*
         * Insert data into database
         * */
        $data=array(
            'Contact_Name' => $this->input->post('name',TRUE),
            'Contact_Num1' => $this->input->post('num1',TRUE),

            'Contact_Num2' => $this->input->post('num2',TRUE),
            'Contact_email' => $this->input->post('email',TRUE),
            'Contact_Address' => $this->input->post('address',TRUE),

        );

        return $this->db->insert('contact',$data);
    }

    public function ViewContact(){
        $this->load->database();
        $qur=$this->db->query("SELECT * FROM contact ORDER BY Contact_Name");
        return $qur->result_array();
    }
}