<?php
$server = "localhost";
$username ="root";
$password = "";
$database = "fundi";

$conn = new mysqli($server, $username, $password, $database);
if($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
    if (isset($_GET['deletenumber'])) {
        $number = $_GET['deletenumber'];

        $sql = "DELETE FROM 'cars' WHERE number=$number";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "Deleted Successfully";
            header('location:tabledata.php');
        } else {
            die(mysqli_error($conn));
        }
    }

}
