<?php
  function inverse($x) {
    if(!$x) {
      throw new Exception('Division by zero');
    }

    return 1 / $x;
  }

  try {
    echo inverse(5);
    echo inverse(0);
  } catch(Exception $e) {
    echo 'Caught Exception', $e->getMessage(), ' ';
  } finally {
    echo 'First Finally';
  }

  echo '<br>';

  try {
    echo inverse(5);
  } catch(Exception $e) {
    echo 'Caught Exception', $e->getMessage(), ' ';
  } finally {
    echo 'Inbetween finally that wont error';
  }

  echo '<br>';

  try {
    echo inverse(0);
  } catch(Exception $e) {
    echo 'Caught Exception', $e->getMessage(), ' ';
  } finally {
    echo 'Second Finally';
  }
?>