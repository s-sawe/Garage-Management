<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fundi Garage</title>
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
                <a href="" class="active"><span class="las la-igloo"></span><span>Dashboard</span></a>
            </li>
            <li>
                <a href="form.php"><span class="las la-users"></span><span>Customers</span></a>
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
    <main>

        <div class="cards">
            <div class="card-single">
                <div>
                    <h1>54</h1>
                    <span>Customers</span>
                </div>
                <div>
                    <span class="las la-users"></span>
                </div>
            </div>

            <div class="card-single">
                <div>
                    <h1>89</h1>
                    <span>Projects</span>
                </div>
                <div>
                    <span class="las la-clipboard-list"></span>
                </div>
            </div>

            <div class="card-single">
                <div>
                    <h1>124</h1>
                    <span>Orders</span>
                </div>
                <div>
                    <span class="las la-shopping-bag"></span>
                </div>
            </div>

            <div class="card-single">
                <div>
                    <h1>$100k</h1>
                    <span>Income</span>
                </div>
                <div>
                    <span class="lab la-google-wallet"></span>
                </div>
            </div>
        </div>
        <div class="recent-grid">
            <div class="projects">
                <div class="card">
                    <div class="card-header">
                        <h3>Recent Projects</h3>
                        <button>See all <span class="las la-arrow-right"></span></button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table width="100%">
                                <thead>
                                <tr>
                                    <td>Number Plate</td>
                                    <td>Owner</td>
                                    <td>Service</td>
                                    <td>Status</td>
                                    <td>Mechanic</td>
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
                                    echo "<tr>
        <td>" . $row["number"] . "</td>
        <td>" . $row["owner"] . "</td>
        <td>" . $row["service"] . "</td>
        <td>" . $row["status"] . "</td>
        <td>" . $row["mechanic"] . "</td>
      
    </tr>" ;
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>