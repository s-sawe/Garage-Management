<!DOCTYPE html>
<html lang="en">
<head>
    <title>Orders</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">


</head>
<body>
<div class="sidebar">
    <div class="sidebar-brand">
        <h2><span class="lab la-accusoft"></span> Fundi Garage</h2>
    </div>
    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="dashboard.php"><span class="las la-igloo"></span><span>Dashboard</span></a>
            </li>
            <li>
                <a href="" class="active"><span class="las la-users"></span><span>Customers</span></a>
            </li>
            <li>
                <a href=""><span class="las la-clipboard-list"></span><span>Services</span></a>
            </li>
            <li>
                <a href="tabledata.php"><span class="las la-shopping-bag"></span><span>Orders</span></a>
            </li>
            <li>
                <a href=""><span class="las la-user-circle"></span><span>Accounts</span></a>
            </li>
        </ul>

    </div>
</div>

<div class="main-content">
    <header>
        <div class="header-title">
            <h2>
                <label>
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h2>

            <div class="user-wrapper">
                <img src="pencil.jpg" width="40px" height="40px" alt="">
                <div>
                    <h4>Jane Doe</h4>
                    <small>Super Admin</small>
                </div>
            </div>
        </div>
    </header>
</div>
<br>
<br>
<br>
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
    $sql = "SELECT * FROM clients";
    $result = $conn->query($sql);


    //check query execution
    if(!$result){
        die("Invalid query:". $conn->error);
    }
    //read data for each row
    while($row = $result->fetch_assoc()){
        $number = $row["number"];
        echo "<tr>
        <td>" . $row["number"] . "</td>
        <td>" . $row["owner"] . "</td>
        <td>" . $row["service"] . "</td>
        <td>" . $row["status"] . "</td>
        <td>" . $row["mechanic"] . "</td>
        <td>
            <a class='btn btn-primary btn-sm' href='update'>Update</a>
            <a class='btn btn-danger btn-sm' href='delete.php? deletenumber='.$number.''>Delete</a>
        </td>
    </tr>" ;
    }
    ?>
    </tbody>
</table>
</br>
</body>
</html>