<?php
include "../settings/connection.php";

function get_requests_admin()
{
    global $mysqli;

    $sql = "SELECT * FROM revampingrequest rq
    INNER JOIN user u ON rq.UserID=u.UserID 
    INNER JOIN servicetype st ON rq.ServiceTypeID = st.ServiceTypeID
    LEFT JOIN technician t ON rq.Technician = t.TechnicianID
    LEFT JOIN status s ON rq.status = s.StatusID
    ";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        $list = $result->fetch_all(MYSQLI_ASSOC);
        
        // print_r($list);
        // exit();


        foreach ($list as $value) {
            echo '
                <tr>
                    <td>'.$value['FirstName']. " ". $value['LastName'].'</td>
                    <td>'.$value['CarModel'].'</td>
                    <td>'.$value['CarNumber'].'</td>
                    <td>'.$value['ServiceType'].'</td>
                    <td>'.$value['TechnicianName'].'</td>
                    <td>'.$value['StatusName'].'</td>
                    <td>'.$value['booking_date'].'</td>
                    <td>
                        <a href="../action/edit_action.php?requestID='.$value['RequestID'].'">Edit</a>
                        <a href="../action/delete_action.php?requestID='.$value['RequestID'].'">Delete</a>
                    </td>
                </tr>
            ';
        }
    }
}
