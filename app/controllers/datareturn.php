<?php

class Datareturn extends Controller{
    public function index($search = null){
        $databaseconnection = $this->model('DB');
        $sql = "SELECT * FROM `users` WHERE `name` LIKE $search";
        $results = $databaseconnection->select(
            "SELECT * FROM `users` WHERE `name` LIKE ?" , ["%$search%"]

        );
        $resultToArray = Array();
        $i = 0;
        foreach($results as $row){
            $resultToArray[$i] = $row;
            $i++;
        }
        echo json_encode(count($resultToArray)==0 ? null : $resultToArray);        
    }

    
}

//["%{$_GET['search']}%"]

