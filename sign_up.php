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
        <form class="sign_up" action="account.php" method="post">
            <div class="title"><p>Sign up</p></div>
            <input type="text" placeholder="Login" name="login" required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="password" placeholder="Comfirm Password" name="comfirm_password" required>
            <input type="email" placeholder="Email" name="email" required>
            <input class="ssup" type="submit" name="submit" value="ok">
        </form>
    </div>
    <footer><p>by ysan-seb</p></footer>
</body>
</html>
