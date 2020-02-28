<?php


class LoginController
{

    function render()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST['register'])) {
                require "view/register.php";
            } elseif (!empty($_POST['create'])) {
                require "view/form.php";
            } elseif (!empty($_POST['login'])) {
                require "view/form.php";
            }
        } else {
            require "view/form.php";
        }
    }
}