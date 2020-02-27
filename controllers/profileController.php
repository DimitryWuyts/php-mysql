<?php

class profileController
{


    public function render()
    {
        $newConnection = new Connection();
        $newConnection = $newConnection->Connect();
        $userId = $_GET['user'];
        $stmt = $newConnection->prepare('SELECT * FROM student_table WHERE id=:id');
        $stmt->execute([ $userId]);
        $user = $stmt->fetch();
        require 'view/profile.php';
    }

}