<!DOCTYPE html>
<html lang="en">
<head>
    <title>Orders</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
</head>
<body style="margin: 50px">
<div class="cards">
    <h1 class="text-center">All Orders</h1>
</div>
<br>
<table width="100%" class="table mt-5 border p-3 bg-light shadow">
    <thead>
    <tr>
        <th>Number Plate</th>
        <th>Owner</th>
        <th>Service</th>
        <th>Status</th>
        <th>Mechanic</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $server = "localhost";
    $username ="root";
    $password = "";
    $database = "fundi";

    $conn = new mysqli($server, $username, $password, $database);
    if($conn->connect_error){
        die("Connection Failed:". $conn->connect_error);
    }
    $sql = "SELECT * FROM cars";
    $result = $conn->query($sql);

    //check query execution
    if(!$result){
        die("Invalid query:". $conn->error);
    }
    //read data for each row
    while($row = $result->fetch_assoc()){
        echo "<tr>
        <td>" . $row["number"] . "</td>
        <td>" . $row["owner"] . "</td>
        <td>" . $row["service"] . "</td>
        <td>" . $row["status"] . "</td>
        <td>" . $row["mechanic"] . "</td>
        <td>
            <a class='btn btn-primary btn-sm' href='update'>Update</a>
            <a class='btn btn-danger btn-sm' href='delete''>Delete</a>
        </td>
    </tr>" ;
    }
    ?>
    </tbody>
</table>
</br>
</body>
</html>