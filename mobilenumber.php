<?php

    $mobile_num = $_GET['mo_number'];

    include 'config.php';

    $sql = "SELECT * FROM mobilenumbers WHERE mo_number = {$mobile_num}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);

        $response['id'] = $row['mo_id'];
        $response['mobilenumber'] = $row['mo_number'];

        echo json_encode($response);
    }else{
        echo "No records";
    }
    
    mysqli_close($conn);
?>
