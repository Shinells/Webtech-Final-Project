<?php
session_start();
include "../settings/connection.php";

if (isset($_POST["loginButton"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $select_query = "SELECT * FROM User WHERE email = '$email'";

    if ($login_query = $mysqli->query($select_query)) {
        if ($login_query->num_rows  > 0) {
            $login_record = mysqli_fetch_assoc($login_query);

            // print_r($login_record);

            if (password_verify($password, $login_record["Password"])) {

                session_start();
                $_SESSION['UserID'] = $login_record['UserID'];
                $_SESSION['email'] = $login_record['Email'];

                header("Location: ../view/services.php");
            } else {
                echo "incorrect email or password";
            }
        } else {
            echo "user not registered";
        }
    }
} else {
    echo "submission fail";
}
