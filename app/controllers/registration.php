<?php

class Registration extends Controller{
    public function index(){
        $this->view('home/registration');      
    }

    public function registrationbtn(){

        $databaseconnection = $this->model('DB');
            $firstName = $_POST['firstName'] ;
            $lastName = $_POST['lastName'] ;
            $password = $_POST['password'] ;
        if($firstName!=="" && $lastName!=="" && $password!==""){
            
            $databaseconnection->select(
                "INSERT INTO `registration` VALUES (? , ? , ?);" , 
                [$firstName , $lastName , $password]
            );
            echo json_encode("Resgistration Successful!");
        }else{
            echo json_encode("Resgistration Failled!");

        }
        
        

    }

    
}