<?php
session_start();


function myLogin(){
    if(!empty($_SESSION["UserID"])){
        require_once '../view/loginRegister.php';
    }else{
        die();
    }
}

?>