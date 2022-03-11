<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Customer</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="style.css">

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
                <a href="" class="active"><span class="las la-users"></span><span>Add Customers</span></a>
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
<br>
    <br>
    <br>


<form action="config.php" method="POST" style="max-width: 600px; margin:auto;" class="mt-5 border p-3 bg-light shadow">
    <fieldset>
        <legend>Client Information</legend>
        Number Plate:<br>
        <input type="text" name="number" class="form-control" required>
        <br>
        Owner:<br>
        <input type="text" name="owner" class="form-control" required>
        <br>
        Service:
        <br>
        <input type="text" name="service" class="form-control" required>
        <br>
        Status:<br>
        <input type="text" name="status" class="form-control" required>
        <br>
        Mechanic:<br>
        <input type="text" name="mechanic" class="form-control" required>
        <br><br>
        <input type="submit" name="sub" value="CREATE" class="btn btn-primary">
    </fieldset>
</form>
</body>
</html>