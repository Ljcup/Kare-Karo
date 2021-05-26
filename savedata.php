<?php

    $mobile_num = $_POST["mo_number"];

    include "config.php";

    $sql = "INSERT INTO mobilenumbers (mo_number) VALUES ('{$mobile_num}')";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    header("Location: http://karekaro.hyperphp.com/index.php");

    mysqli_close($conn);

?>
