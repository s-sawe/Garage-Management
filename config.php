<?php
$number = $_POST['number'];
$owner = $_POST['owner'];
$service = $_POST['service'];
$status = $_POST['status'];
$machine = $_POST['mechanic'];

$conn = new mysqli('localhost','root','','fundi');

$sql = "INSERT INTO department(number,owner,service,status,machine) VALUES ('$number','$owner','$service','$status','$machine')";
if($conn->query($sql) == TRUE){
    echo "Data Insert Successful";
    header('location:dashboard.php');
}else{
    echo "Error:".$sql."<br>".$conn->error;
}
