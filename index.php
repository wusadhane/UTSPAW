<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/main.css">
</head>


<body>
    <div class="wrapper">
        <div class="title">
            Login Form
        </div>
        <form action="auth/login.php" method="post">
            <div class="field">
                <input type="text" required name="username">
                <label>Email Address</label>
            </div>
            <div class="field">
                <input type="password" required name="password">
                <label>Password</label>
            </div>
            <div class="content">
                <div class="checkbox">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember me</label>
                </div>
            </div>
            <div class="field">
                <input type="submit" value="Login">
            </div>
            <input type="hidden" name="submitted" value="1">
        </form>
    </div>
</body>



</html>