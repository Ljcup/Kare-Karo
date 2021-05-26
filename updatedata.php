<?php
$mobile_id = $_POST['mo_id'];
$mobile_number = $_POST['mo_number'];

include 'config.php';

$sql = "UPDATE mobilenumbers SET mo_number = '{$mobile_number}' WHERE mo_id = {$mobile_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://karekaro.hyperphp.com/index.php");

mysqli_close($conn);

?>
