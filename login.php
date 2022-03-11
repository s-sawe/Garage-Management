<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>

</head>
<body>
<div>
    <form style="max-width: 400px; margin:auto;" class="mt-5 border p-3 bg-light shadow">
        <h3>Login</h3>


        <label for="emailAddress" class="sr-only">E-mail Address</label>
        <input type="email" id="emailAddress" class="form-control" required autofocus>


        <label for="password" class="sr-only mt-3">Password</label>
        <a class="float-end mt-3" href="#">Forgot Password?</a>
        <input type="password" id="password" class="form-control">

        <div class="checkbox mt-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember Me
            </label>
            <button class="btn btn-primary float-end"><a href="#" class="text-white">Login</a></button>


        </div>
        <br>
        <p class="text-center">Don't Have an Account? <a href="register.html">Create One</a></p>

    </form>
</div>

</body>
</html>