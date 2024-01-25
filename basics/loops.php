<?php 
  //For Loop

  // Initial value(initializer); condition; increment by;

  for($x = 0; $x <= 10; $x++) {
    echo $x;
  }
?>

<br>

<?php 
  //While Loop
  $x = 1;

  while($x <= 15 ) {
    echo 'Number' . $x . '<br>';
    $x++;
  }
?>

<br>

<?php 
  //Foreach loop => for arrays
  
  $wutang = ["ODB", "RZA", "GZE", "Inspectah Deck"];

  foreach($wutang as $wus) {
    echo $wus;
  }

  // With index:
  foreach($wutang as $index => $wus) {
    echo $index . $wus;
  }
?>