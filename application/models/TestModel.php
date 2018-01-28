<?php

class TestModel extends CI_Model {
    public function firstname (){

        $city= $this->city();
        return "Maneesha".$city;
    }
//cannot be accesed by the controller

//but the function can be called by another funtion in the same class
    private function city (){
        return "Colombo";
    }
}

?>