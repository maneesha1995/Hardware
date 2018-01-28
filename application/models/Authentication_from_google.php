<?php

class Authentication_from_google extends CI_Model {
    public function userData (){
        return "Maneesha Wijesinghe";
    }
//cannot be accesed by the controller

//but the function can be called by another funtion in the same class
//    private function city (){
//        return "Colombo";
//    }
}

?>