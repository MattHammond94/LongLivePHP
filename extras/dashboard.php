<?php
  session_start();
  
  if(isset($_SESSION['username'])) {
    echo '<h1> Welcome ' . $_SESSION['username'] . '</h1' . '<br>';


    echo '<a href="logout.php">Logout</a>';
  } else {
    echo '<h1>Welcome Guest</h1>';
    echo '<a href="/PHP/basics/sessions.php">Click me</a>';
  }
?>