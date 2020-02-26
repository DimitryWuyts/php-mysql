<?php

class Controller{

    public function render(){
        $connection = new connection();
        $connection->connect();
        $testObj = new getData();
        $testObj->getName();
        if($connection){
            echo ' You are connected!'.'<br>';
        }
        if(!empty($_POST)){

            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $username = $_POST['username'];
            $linkedin = $_POST['linkedin'];
            $github = $_POST['github'];
            $email = $_POST['email'];
            $preferred_language = $_POST['preferred_language'];
            $avatar = $_POST['avatar'];
            $video = $_POST['video'];
            $quote = $_POST['quote'];
            $quote_author = $_POST['quote_author'];
            $testObj->setUserStmt($_POST['first_name'],$_POST['last_name'],$_POST['username'],$_POST['linkedin'],$_POST['github'],$_POST['email'],$_POST['preferred_language'],$_POST['avatar'],$_POST['video'],$_POST['quote'],$_POST['quote_author']);

        }

        require 'view/form.php';
    }

}