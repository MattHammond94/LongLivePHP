<?php
  session_start();

  session_destroy();
  header('Location: /PHP/basics/sessions.php')
?>