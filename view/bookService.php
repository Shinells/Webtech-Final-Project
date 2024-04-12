<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Revamping Website</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
        .formBtn{
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

</head>

<body>
    <div class="container">
        <!-- <div class="form"> -->
            <form action="../action/book_action.php" method="post">

                <label for="carN">Car Number</label>
                <input type="text" id="carN" name="carNumber" placeholder="Your car number">

                <label for="carM">Car Model</label>
                <input type="text" id="carM" name="carModel" placeholder="Your car model">

                <label for="service">Service Type</label>
                <?php 
                include '../functions/get_services_fxn.php';
                get_services();
                ?>

                <label for="info">Additional information</label>
                <textarea id="info" name="info" placeholder="Add extra details" style="height:200px"></textarea>

                <!-- <input class="formBtn" type="submit" value="Submit"> -->
                <button type="submit" name="formButton" class="formBtn">Submit</button>

            </form>
        <!-- </div>    -->
    </div>








<!-- <div class="box" id="booking">
    <h2>BOOK SERVICE</h2>
    <form id="bookingForm" method="post" action="">
        <div class="input-box">
            <i class="bi bi-person-fill"></i>
            <input type="text" name="fName" id="fName" placeholder="First Name" required>
        </div>
        <div class="input-box">
            <i class="bi bi-person-fill"></i>
            <input type="text" name="lName" id="lName" placeholder=" Last Name" required>
        </div>
        <div class="input-box">
            <i class="bi bi-car"></i>
            <input type="text" id="vehicleInput" name="vehicle" placeholder="Enter your vehicle model" required>
        </div>
        <div class="input-box">
            <i class="bi bi-basket"></i>
            <select id="serviceSelect" name="service" required>
                <option value="" disabled selected>Select Package</option>
                <option value="regularPackage">Regular</option>
                <option value="platinumPackage">Platinum</option>
                <option value="goldPackage">Gold</option>
                <option value="ultimatePackage">Ultimate</option>
            </select>
            <label for="serviceSelect">Select Package</label>
        </div>
        <!- <div class="input-box">
            <i class="bi bi-calendar3"></i>
            <input type="date" id="dateInput" name="date" min="2024-04-10" required>
            <label for="dateInput">Preferred Date</label>
        </div>
        <div class="input-box">
            <i class="bi bi-clock"></i>
            <input type="time" id="timeInput" name="time" required>
            <label for="timeInput">Preferred Time</label>
        </div> -->
        <!-- <div class="input-box">
            <i class="bi bi-sticky"></i>
            <textarea id="notesTextarea" name="notes" placeholder="Any specific requirements or notes"></textarea>
            <label for="notesTextarea">Additional Notes</label>
        </div>
        <input type="submit" class="btn" value="Book Now" name="book">
    </form>
</div>

    <script src="script.js"></script>  -->
</body>

</html>
