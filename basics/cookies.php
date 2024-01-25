<?php
  setcookie('name', 'Big-Julie', time() + 86400 * 30);

  if(isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
  }

  // unset a cookie:
  setcookie('name', '', time() - 86400);
?>