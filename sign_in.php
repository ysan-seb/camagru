<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sign in</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <?php include("header.php");?>
    <div class="content">
        <form class="sign_in" action="account_create.php" method="post">
            <div class="title"><p>Sign in</p></div>
            <input type="text" placeholder="Login" name="login" required>
            <input type="password" placeholder="Password" name="password" required>
            <a class="forgot" href="forgot_password.php">forgot password?</a>
            <input class="ssin" type="submit" value="submit">
        </form>
    </div>
    <footer><p>by ysan-seb</p></footer>
</body>
</html>
