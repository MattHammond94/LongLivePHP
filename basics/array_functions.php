<?php
  $fruits = ["apple", "orange", "pear"];

  echo count($fruits);

  var_dump(in_array('apple', $fruits));

  // Mutating an array:
  $fruits[] = 'grape'; // Back of Array
  array_push($fruits, "raspberry pi"); // Back of array
  array_unshift($fruits, 'mango'); // Front of array
  unset($fruits[2]); // Removes value at index

  $chunked_array = array_chunk($fruits, 2); // Splits array into chunks of 2


  $a = ['green', 'red', 'yellow'];
  $b = ['avocado', 'apple', 'banana'];

  // Turns two arrays into k, v pair
  $c = array_combine($a, $b);
  // Merges two arrays together:
  $d = array_merge($a, $b);
  // Swaps the k and v pair in a assosciative array
  $e = array_flip($c);

  print_r($c);
  print_r($d);
  print_r($e);


  $values = range(1, 20);

  //map:
  $newArray = array_map(function($value) {
    return "Value: $value";
  }, $values);

  print_r($newArray);

  $lessThanTen = array_filter($values, fn($number) => $number <= 10);

  print_r($lessThanTen);

?>