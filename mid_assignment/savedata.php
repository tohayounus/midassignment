<?php

 $stu_name = $_POST['sname'];
 $stu_address = $_POST['saddress'];
 
 $stu_phone = $_POST['sphone'];

$conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");

$sql = "INSERT INTO student(sname,saddress,sphone) VALUES ('{$stu_name}','{$stu_address}','{$stu_phone}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/mid_assignment/index.php");

mysqli_close($conn);

?>
