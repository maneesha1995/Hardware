<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 1/12/2018
 * Time: 10:17 AM
 */

class RentModel extends CI_Model
{

    //insert functions
    public function InsertRentData(){
        /*
         * Insert data into database
         * */

        $data=array(
            'Item_Name' => $this->input->post('name',TRUE),


            'Item_Description' => $this->input->post('des',TRUE),
//            'Purchased _Date' => $this->input->post('date',TRUE),
            'Rent_price' => $this->input->post('price',TRUE),

        );

        return $this->db->insert('rent',$data);
    }

    //view data
    public function Viewitem(){
        $this->load->database();
        $qur=$this->db->query("SELECT * FROM rent WHERE Status='Available' ORDER BY Item_Name");
        return $qur->result_array();
    }

    //delete functions


    public function deleteitem($Product_ID) {

        $this->db->where('Rent_ID',$Product_ID);
        $this->db->delete('rent');
    }

    //update function

    public function fetch_data($id){
        $this->db->where('Rent_ID',$id);
        $query=$this->db->get('rent');
        return $query;
    }

    //addperson
    public function edit($Rent_ID) {

        $this->db->where('Rent_ID',$Rent_ID);
        $query = $this->db->get_where('rent', array('Rent_ID'=>$Rent_ID));

        return $query->result_array();



    }
    public function InsertPersonData(){
        /*
         * Insert data into database
         * */

        $data=array(
            'NIC' => $this->input->post('nic',TRUE),


            'Name' => $this->input->post('cname',TRUE),
//            'Purchased _Date' => $this->input->post('date',TRUE),
            'Address' => $this->input->post('address',TRUE),

            'Tel' => $this->input->post('tel',TRUE),


//            'VehicleNo' => $this->input->post('vehicle',TRUE),
////            'Purchased _Date' => $this->input->post('date',TRUE),
//            'Deposit' => $this->input->post('deposit',TRUE),
//            'ItemID' => $this->input->post('ID',TRUE),
//
//
//            'ItemName' => $this->input->post('name',TRUE),
////            'Purchased _Date' => $this->input->post('date',TRUE),
            'Date'               =>date("Y/m/d"),

        );
        $ID=$this->input->get('ID');
        $value=array(
            'Status'               =>'Rented',


        );

       $this->db->insert('rentperson',$data);
        $this->db->where('Rent_ID',$ID);
        return $this->db->update('rent',$value);


    }

}