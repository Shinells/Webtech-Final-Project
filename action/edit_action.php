<?php
include_once '../settings/connection.php';

if(isset($_GET['requestID'])){
    $requestID = $_GET['requestID'];
    echo $requestID;

    $sql = '';


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<style>
        body {
            background-image: url("../assets/carImage.jpeg");
            background-size: cover;
            background-repeat: no-repeat;
        }
        input[type=text], select, textarea {
            width: 100%; /* Full width */
            padding: 12px; /* Some padding */ 
            border: 1px solid #ccc; /* Gray border */
            border-radius: 4px; /* Rounded borders */
            box-sizing: border-box; /* Make sure that padding and width stays in place */
            margin-top: 6px; /* Add a top margin */
            margin-bottom: 16px; /* Bottom margin */
            resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
        }

        /* Style the submit button with a specific background color etc */
        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* When moving the mouse over the submit button, add a darker green color */
        input[type=submit]:hover {
            background-color: #45a049;
        }

        

        /* Add a background color and some padding around the form */
        .container {
            border-radius: 5px;
            background-color: #fff;
            padding: 15px;
            width: 50%;
            /* height: 40; */
            margin: auto;
        }
        .editbtn{
            display: block;
            margin: auto; 
            padding: 6px 24px;
            border: 2px solid #333;
            background: #fff;
            border-radius: 6px;
            cursor: pointer;
        }

        /* .form{
            border: 1px solid red;
            width: 60%;
        } */
    </style>

<body>
    <div class="container">
        <h2>Edit Status</h2>
        <form action="">
            <input type="text" id="editstatus" name="edit" placeholder="Edit Status" >
            <input type="text" id="editpersonnel" name="edit" placeholder="Edit Assigned Personnel" >
            <button type="submit" id="editbtn" name="editbtn">Edit Status</button>
        </form>
    </div>
    
</body>
</html>