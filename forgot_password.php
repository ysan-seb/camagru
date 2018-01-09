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
      <?php
        if (!$_POST[email])
          echo "<form class=\"forgot_password\" action=\"forgot_password.php\" method=\"post\">
                  <div class=\"fitle\"><p>Forgot password</p></div>
                    <input type=\"email\" placeholder=\"Email\" name=\"email\" required>
                    <input class=\"ssup\" type=\"submit\" value=\"submit\">
                </form>";
        else
        {
          echo "Check your email";
          header('Refresh: 5; URL=home.php');
        }
       ?>
    </div>
    <footer><p>by ysan-seb</p></footer>
</body>
</html>
