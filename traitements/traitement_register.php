<?php
session_start();
require_once "../functions/database.php";
require_once "../functions/users.php";

if($_SERVER["REQUEST_METHOD"] === "POST") {

    if(
        isset($_POST['username']) && $_POST['username'] !== '' &&
        isset($_POST['mail']) && $_POST['mail'] !== '' &&
        isset($_POST['password']) && $_POST['password'] !== ''  )
    {
        $u =    [   
                    "username" =>$_POST["username"],
                    "mail" =>$_POST["mail"],
                    "password" =>$_POST["password"],
                ];
            register($u);
    }
    else{
        header("Location: /teamup/");
    }
}
else{
    header("Location: /teammup/");
}