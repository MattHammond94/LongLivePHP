<?php
  if (isset($_POST['submit'])) {
    echo $_POST['name'];
    echo $_POST['age'];
  }
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Brad&age=30">Click</a>

<!-- GET: -->
<!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
  <div>
    <label for="name">Name: </label>
    <input type="text" name="name">
  </div>
  <div>
    <label for="age">Age: </label>
    <input type="text" name="age">
  </div>
  <input type="submit" value="submit" name="submit">
</form> -->

<!-- POST: -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div>
    <label for="name">Name: </label>
    <input type="text" name="name">
  </div>
  <div>
    <label for="age">Age: </label>
    <input type="text" name="age">
  </div>
  <input type="submit" value="submit" name="submit">
</form>