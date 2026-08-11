<?php
require_once "../functions/users.php";

if($_SERVER["REQUEST_METHOD"] === "POST"){

    if(
        isset($_POST["mail"]) && $_POST["mail"] !== "" &&
        isset($_POST["password"]) && $_POST["password"] !== "" )
    {
        $u =    ["mail"=>$_POST["mail"],
                "password"=>$_POST["password"] ];
            connection($u);
    }
    else{
        header("Location: /teamup/pages/login.php");
    }

}
else{
    header("Location: /teamup/pages/login.php");
}