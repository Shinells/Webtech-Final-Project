<?php
include '../settings/connection.php';

function get_services(){
    global $mysqli;

    $sql = "SELECT * FROM servicetype";

    $result = $mysqli->query($sql);

    if($result->num_rows>0){
        $list = $result->fetch_all(MYSQLI_ASSOC);


        $selectService = '<select name="service">';
        
        foreach ($list as $value) {
            $selectService.='<option value='.$value['ServiceTypeID'].'>'.$value['ServiceType'].'</option>';
        }

        $selectService.='</select>';

        echo $selectService;

    }
}


?>