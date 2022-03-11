<?php
$number = $_POST['number'];
$owner = $_POST['owner'];
$service = $_POST['service'];
$status = $_POST['status'];
$mechanic = $_POST['mechanic'];

$conn = new mysqli('localhost','root','','fundi');

$sql = "INSERT INTO clients(number,owner,service,status,mechanic) VALUES ('$number','$owner','$service','$status','$mechanic')";
if($conn->query($sql) == TRUE){
    echo "Data Insert Successful";
}else{
    echo "Error:".$sql."<br>".$conn->error;
}
