<?php
function    password_verif($db, $password, $confirm_password)
{
  if ($password != $confirm_password)
  {
    echo "Please enter the same password as above\n";
    return (FALSE);
  }
  else if (!preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}$#', $password))
  {
    echo "the password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters\n";
    return (FALSE);
  }
  return (TRUE);
}
?>
