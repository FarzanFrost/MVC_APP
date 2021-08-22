<?php

class Home extends Controller{
    public function index($name = ''){
        $user = $this->model('User');
        $user->name = $name;
        $databaseconnection = $this->model('DB');
        $results = $databaseconnection->select(
            "SELECT * FROM `users`"
        );
        $this->view('home/index' , ['result' => $results]);


    }

    public function test(){
        echo "test";
    }
}