<?php
$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];

$stu_phone = $_POST['sphone'];

include 'config.php';

$sql = "UPDATE student SET sname = '{$stu_name}', saddress = '{$stu_address}', sphone = '{$stu_phone}' WHERE sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/mid_assignment/index.php");

mysqli_close($conn);

?>
