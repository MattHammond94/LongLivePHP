<?php
  // Unlike a cookie the session is stored on thre server side not the client side 
  // More secure than a cookie. 
  // Can use a session to store more sensitive information

  // Always have to include the session_start call when using a session.
  session_start();

  if (isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];

    if($username == 'MattyMoo' && $password == 'password') {
      $_SESSION['username'] = $username;
      header('Location: /PHP/extras/dashboard.php');
    } else {
      echo 'Incorrect Login';
    }
  }
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  <div>
    <label for="username">Username: </label>
    <input type="text" name="username">
  </div>
  <div>
    <label for="password">Password: </label>
    <input type="password" name="password">
  </div>
  <input type="submit" value="submit" name="submit">
</form>