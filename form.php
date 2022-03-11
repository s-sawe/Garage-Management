<!DOCTYPE html>
<html lang="en">
<body>
<head>
    <meta charset="UTF-8">
    <title>New Customer</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>

</head>
<h2 class="text-center">New Customer Form</h2>
<form action="config.php" method="POST" style="max-width: 400px; margin:auto;" class="mt-5 border p-3 bg-light shadow">
    <fieldset>
        <legend>Client Information</legend>
        Number Plate:<br>
        <input type="text" name="number" class="form-control">
        <br>
        Owner:<br>
        <input type="text" name="owner" class="form-control">
        <br>
        Service:
        <br>
        <input type="text" name="service" class="form-control">
        <br>
        Status:<br>
        <input type="text" name="status" class="form-control">
        <br>
        Mechanic:<br>
        <input type="text" name="mechanic" class="form-control">
        <br><br>
        <input type="submit" name="sub" value="CREATE" class="btn btn-primary">
    </fieldset>
</form>
</body>
</html>