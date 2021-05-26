<?php

$mobile_num = $_GET['mo_number'];

include 'config.php';

$sql = "DELETE FROM mobilenumbers WHERE mo_number = {$mobile_num}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://karekaro.hyperphp.com/index.php");

mysqli_close($conn);

?>
