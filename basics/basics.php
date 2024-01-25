<?php
  echo 'The semi colons are important in PHP';
  print '123';
  // Comment
  print_r('Hello');
  // print_r is used for printing arrays
  var_dump('Hello'); 
  // var_dump can also be used for arrays - also shows the data type and extra info when printing
  var_export('245');
  // prints inclusive of quotations
?>

<?php 
  echo 'PHP Data types:';
?>

<?php
  echo 'String, Int, Float, Boolean, Array, Object(Class for OOP), Null and Resource';
  echo 'Variables must be prefixed with a $';
  echo 'Variables must start with a letter or an undrscore, cannot start with a number';
  echo 'Can only contian alpha-numeric characters and underscores';
  echo 'Variables are case sensitive';
?>

<?php
  $name = 'MattyMooMilk';
  $age = 29;
  $has_kids = true;
  $has_kids_really = false;

  echo $has_kids;  // Returns 1 => if false wouldn't return anything.
  var_dump($has_kids_really);

  echo "$name is $age years old"; // Double quotes for concatenation.

  echo 5 + 5;
  echo "5" + "5"; // Math also works on strings
?>

<?php
  define('THE_MAN', 'me'); // Setting a const 

  echo THE_MAN; // Returns 'me'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1><?= 'One line'; ?></h1>
  <!-- ^^Cleaner way to print one line in HTML^^ -->
</body>
</html>

