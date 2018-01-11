<?php
function    login_check($db, $user)
{
  foreach ($db as $data)
  {
      if ($data['login'] == $user)
          return (FALSE);
  }
  return (TRUE);
}

function    password_check($password, $confirm_password)
{
  if ($password != $confirm_password)
    return (1);
  else if (!preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}$#', $password))
    return (2);
  return (0);
}

function    email_check($db, $user_email)
{
  foreach ($db as $data)
  {
      if ($data['email'] == $user_email)
          return (FALSE);
  }
  return (TRUE);
}

function    fields_check($db, $login, $password, $confirm_password, $email)
{
  $email = filter_var($user_email, FILTER_SANITIZE_EMAIL);
  if (login_check($db, $user) == FALSE)
  {
    echo "login exist\n";
    return (FALSE);
  }
  else if (password_check($password, $confirm_password) == 1)
  {
    echo "Please enter the same password as above\n";
    return (FALSE);
  }
  else if (password_check($password, $confirm_password) == 2)
  {
    echo "the password must contain at least one number and one uppercase
    and lowercase letter, and at least 8 or more characters\n";
    return (FALSE);
  }
  else if (email_check($db, $email) == FALSE)
  {
    echo "email exist\n";
    return (FALSE);
  }
  else if (filter_var($email, FILTER_VALIDATE_EMAIL))
  {
    echo "email wrong format\n";
    return (FALSE);
  }
  return (TRUE);
}
 ?>
