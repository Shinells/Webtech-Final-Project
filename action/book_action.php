<?php
session_start();
include "../settings/connection.php";

if (isset($_POST['formButton'])){
    $userID=$_SESSION['UserID'];
    $carModel=$_POST['carModel'];
    $carNum=$_POST['carNumber'];
    $addInfo=$_POST['info'];
    $serviceType=$_POST['service'];

    $sql ="INSERT INTO RevampingRequest(UserID, CarModel, CarNumber, AdditionalInfo, ServiceTypeID) VALUES('$userID','$carModel','$carNum','$addInfo','$serviceType')";
    
    $result = $mysqli->query($sql);

    if ($result) {
        header('Location: ../view/services.php');
    }else{
        echo "Failed to book";
    }
}
?>