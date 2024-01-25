<?php
  $age = 20;

  if($age >= 18) {
    echo 'Party time';
  } else if($age > 50) {
    echo 'Time for nap';
  }
  else {
    echo ' Sorry no party';
  }
?>

<?php
  // Ternarys:

  $nums = [1, 2, 3, 4];
  $num_2 = [];

  echo empty($nums) ? 'Array is empty' : 'Array is not empty';

  $emptyNums = $nums_2[0] ?? null;
  echo $emptyNums
?>

<?php 
  $t = date("F j");
  $t_2 = date("H");

  echo "The date is $t";
  echo "The hour is $t_2";
?>

<?php 
  $favcolour = 'Red';

  switch($favcolor) {
    case 'Red';
      echo 'Your favourite color is red';
      break;
    case 'Blue';
      echo 'Your fav color is blue';
      break;
    default;
      echo 'Your favourite color is not blue or red';
  }
?>