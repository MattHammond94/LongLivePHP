<?php

  $file = '../extras/Wu-Tangs.txt';

  if(file_exists($file)) {
    //Reading files:

    // echo readfile($file);
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
  } else {
    //Writing files:

    $handle = fopen($file, 'w');
    $contents = 'BigMattyMoo' . PHP_EOL . 'BigJohn' . PHP_EOL . 'BigSally';
    fwrite($handle, $contents);
    fclose($handle);
  }
?>