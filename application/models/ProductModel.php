<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 1/7/2018
 * Time: 12:58 PM
 */

class ProductModel extends CI_Model
{

    //insert functions**************************************************************************************************
    public function InsertProductData(){
        /*
         * Insert data into database
         * */

        $data=array(
            'Product_Name' => $this->input->post('name',TRUE),
            'Product_Category' => $this->input->post('category',TRUE),
            'Product_Date'               =>date("Y/m/d"),
            'Product_Description' => $this->input->post('des',TRUE),
            'Product_Quantity' => $this->input->post('qty',TRUE),
            'Product_price' => $this->input->post('price',TRUE),
            'Selling_price' => $this->input->post('sprice',TRUE),

        );
       $update=$data[5];
       $name=$data[0];
        return $this->db->insert('product',$data);
        $this->db->where('Type_Name',$name);//fetch data fro the database



    }


    public function InsertItemData(){
        /*
         * Insert data into database
         * */
        $data=array(
            'Type_Name' => $this->input->post('name',TRUE),
            'Type_Category' => $this->input->post('category',TRUE),
            'Location_Rack' => $this->input->post('location_rack',TRUE),
            'Location_row' => $this->input->post('location_row',TRUE),

        );

        return $this->db->insert('itemtype',$data);
    }

    //update functions**************************************************************************************************

    public function edit($Product_ID) {

        $this->db->where('Product_ID',$Product_ID);
        $query = $this->db->get_where('product', array('Product_ID'=>$Product_ID));

        return $query->result_array();



    }
    public function UpdateProduct($Product_ID) {

        $data = array(
            'Product_Description' => $this->input->post('des'),
            'Product_Quantity' => $this->input->post('qty'),
            'Product_price' =>$this->input->post('price'),

        );
        $this->db->where('Product_ID',$Product_ID);
        $this->db->update('product',$data);
        return $Product_ID;
    }

//view functions********************************************************************************************************

    public function ViewCement(){
       $this->load->database();
       $qur=$this->db->query("SELECT * FROM product WHERE Product_Category='Cement' Order BY Product_Date");
       return $qur->result_array();
    }
    public function Viewhousehold(){
        $this->load->database();
        $qur=$this->db->query("SELECT * FROM product WHERE Product_Category='Household Items' Order BY Product_Date");
        return $qur->result_array();
    }
    public function ViewItemType(){
        $this->load->database();
        $qur=$this->db->query("SELECT * FROM itemtype Order BY Type_Name");
        return $qur->result_array();
    }
    public function ViewitemCement(){
        $this->load->database();
        $query=$this->db->query("SELECT * FROM itemtype WHERE Type_Category='Cement'");
        return $query->result_array();
    }
    public function ViewitemHousehold(){
        $this->load->database();
        $query=$this->db->query("SELECT * FROM itemtype WHERE Type_Category='Household Items'");
        return $query->result_array();
    }


//delete functions******************************************************************************************************


    public function deleteproduct($Product_ID) {

        $this->db->where('Product_ID',$Product_ID);
        $this->db->delete('product');
    }
    public function deleteitem($Product_ID) {

        $this->db->where('Type_Name',$Product_ID);
        $this->db->delete('itemtype');
    }


//search functions******************************************************************************************************

//search item
//public function SearchItem($name){
//        $this->db->LIKE('Type_Name',$name,'both');
//        return $this->db->get('itemtype')->result();
//}

    public function GetRow($keyword) {
        $this->db->order_by('Type_Name', 'DESC');
        $this->db->like('Type_Name', $keyword);
        return $this->db->get('itemtype')->result_array();
    }
}

