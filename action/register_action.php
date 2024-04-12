<?php
include "../settings/connection.php";


if (isset($_POST['signupButton'])){
    $fname=$_POST["fName"];
    $lname=$_POST["lName"];
    $phoneNumber=$_POST["phonenumber"];
    $email=$_POST["email"];
    $passwd=$_POST["password"];
    $cpasswd=$_POST["confirmPassword"];

    $hashpassword=password_hash($passwd, PASSWORD_BCRYPT);

    $querySql = "INSERT INTO User(FirstName,LastName,Password,Email,Phonenumber, Role) VALUES ('$fname','$lname','$hashpassword','$email','$phoneNumber', '2')";

    $result = $mysqli->query($querySql);

    if ($result) {
        header('Location: ../view/loginRegister.php');
    }else{
        echo "Failed to create account";
    }
}
?>
