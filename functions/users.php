<?php
require_once "database.php";

function register($user) {

    $hash = password_hash($user["password"],PASSWORD_DEFAULT) ;

    $pdo = getPDO();
    $sql ="INSERT INTO users (username, mail, role, password) VALUES (:username, :mail, :role, :password)";
    $pstmt = $pdo->prepare($sql);
    $trueUser = ["username"=>$user["username"],"mail"=>$user["mail"],"role"=>"user","password"=>$hash ];

    $result = $pstmt->execute($trueUser);


    if ($pstmt->rowCount() === 1) {
        echo "Inscription réalisé avec succès !";
        $id = $pdo->lastInsertId();
        $_SESSION["username"] = $trueUser["username"];
        $_SESSION["user_id"] = $id;
        $_SESSION["role"] = $trueUser["role"];
        $_SESSION["mail"] = $trueUser["mail"];
        header("Location: /teamup/pages/dashboard.php");
    } else {
        echo "Ajout impossible";
    }
}

function connection($user){

    $pdo = getPDO();
    $sql ="SELECT * FROM users WHERE mail = ?";
    $pstmt = $pdo->prepare($sql);
    $u = [$user["mail"]];

    if ($pstmt->execute($u)) {
        $user_base = $pstmt->fetch(PDO::FETCH_ASSOC);
        $isSame = password_verify($user["password"],$user_base["password"]);
        if($isSame === true){
            $_SESSION["username"] = $user_base["username"];
            $_SESSION["mail"] = $user_base["mail"];
            $_SESSION["role"] = $user_base["role"];
            $_SESSION["user_id"] = $user_base["id"];
            header("Location: /teamup/pages/dashboard.php");
        } else {
            header("Location: /teamup/pages/login.php");
        }
        exit();
    } else {
        print_r($pstmt->errorInfo());
    }

}
