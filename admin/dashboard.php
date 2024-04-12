<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 60%;
            border-collapse: collapse;
            margin-left: auto;
            margin-right: auto;
        }
        .center{
            margin-left: auto;
            margin-right: auto;
        }
        th, td{
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th{
            background-color: #f2f2f2;
        }
        body{
    min-height: 100vh;
}
a{
     text-decoration: none;
}
li{
    list-style: none;
}
h1,
h2{
    color: black;
}
.side-panel{
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f2f2f2;
    position: fixed;
    height: 100%;
    overflow: auto;
    /* position: fixed;
    background: rgb(50, 136, 172) ;
    width: 20vw;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
     */
}
.side-panel .title{
    height: 10vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
.side-panel li{
    font-size: 24px;
    padding: 10px 40px;
    color: rgb(0, 0, 0);
    display: flex;
    align-items: center;
    justify-content: center;
}
.side-panel li:hover{
    background: white;
    color: rgb(50, 136, 172);
}
/* .container .content{
    position: relative;
    margin-top: 10vh;
    min-height: 90vh;
} */
    </style>
</head>
<body>
    <div class="side-panel">
        <div class="title">
            <h1>ADMIN</h1>
        </div>
        <ul>
        <ul>
            <li><a href="../admin/dashboard.php">Dashboard</a></li>
            <li><a href="../view/services.php">Services</a></li>
            <li><a href="../action/edit_action.php">Manage Data</a></li>
            <li><a href="../view/loginRegister.php">Logout</a></li>
        </ul>
        </ul>
    </div>

    <table class="center">
        <tr>
          <th>Customer Name</th>
          <th>Car Model</th>
          <th>Car Number</th>
          <th>Service type</th>
          <th>Assigned Personnel</th>
          <th>Status</th>
          <th>Booking date</th>
          <th>Actions</th>

        </tr>
        <?php 
            include_once '../functions/dashboard_fxn.php';
            get_requests_admin();
        ?>
    </table>
</body>
</html>