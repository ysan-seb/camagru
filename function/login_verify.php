<?php
  function    login_exist($db, $user)
  {
    foreach ($db as $data)
    {
        if ($data['login'] == $user)
            return (0);
    }
    return (1);
  }
?>
