<?php
  function getAWu() {
    echo 'RZA' . '<br>';
  }

  // Default values:
  function getAWuTwo($aWu = 'RZA') {
    echo $aWu . '<br>';
  }
?>

<?php
  getAWu();
  getAWuTwo('GZA');
  getAWuTwo('ODB');
  getAWuTwo();
?>

<?php
  //One line functions:
  $multiplier = fn($n1, $n2) => $n1 * $n2;

  echo $multiplier(2, 5);
?>