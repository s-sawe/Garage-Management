<?php

error_reporting(0);

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $confirmpassword = md5($_POST['confirmpassword']);

    $server = "localhost";
    $username ="root";
    $password = "";
    $database = "fundi";

    $conn = new mysqli($server, $username, $password, $database);
    if($conn->connect_error){
        die("Connection Failed:". $conn->connect_error);
    }

    if($password == $confirmpassword){
        $sql = "SELECT * FROM person WHERE email = '$email' AND password ='$password'";

        $result = mysqli_query($conn, $sql);

        if(!$result->num_rows > 0){
            $sql = "INSERT INTO person('username', 'email', 'password')
                  VALUES ('$username','$email','$password')";
            $result = mysqli_query($conn, $sql);
            if(!$result) {
                echo "<script>alert('Registration Sucessful!')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['confirmpassword'] = "";
            }else {
                echo "<script>alert('Registration Failed!')</script>";
            }
        }else{
            echo "<script>alert('Email Already Exists!')</script>";
        }

    }else{
        echo "<script>alert('Password Mismatch!')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signin</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>

</head>
<body class="body">

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="signup-form">
                <form action="" method="post" class="mt-5 border p-3 bg-light shadow">
                    <h4>Create Your Account</h4>
                    <br>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label>Username<span class="text-danger">*</span></label>
                            <input type="text" name="username" class="form-control" placeholder="Enter Username" value="<?php echo $username; ?>" required>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label>Email<span class="text-danger">*</span></label>
                            <input type="text" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $email ?>" required>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label>Password<span class="text-danger">*</span></label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password" value="<?php echo $_POST['password']; ?>" required>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label>Confirm Password<span class="text-danger">*</span></label>
                            <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" value="<?php echo $_POST['confirmpassword']; ?>" required>
                        </div>
                        <div class="mb-3 col-md-12">
                            <button name="submit" class="btn btn-primary float-end">Signup Now</button>
                        </div>
                    </div>
                </form>
                <p class="text-center mt-3 text-secondary">If you have an account, Please <a href="login.php">Login Now</a></p>
            </div>
        </div>
    </div>
</div>

</body>
</html>