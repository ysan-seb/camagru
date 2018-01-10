<?php
function    email_exist($db, $user_email)
{
  foreach ($db as $data)
  {
      if ($data['email'] == $user_email)
          return (FALSE);
  }
  return (TRUE);
}

function    email_verify($db, $user_email)
{
  $email = filter_var($user_email, FILTER_SANITIZE_EMAIL);
  if (filter_var($email, FILTER_VALIDATE_EMAIL) && email_exist($db, $email))
    return (TRUE);
  return (FALSE);
}
?>
