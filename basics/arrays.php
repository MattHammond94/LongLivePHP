<?php
  $numbers = [1, 2 , 3];
  // print_r($numbers);
  var_dump($numbers);  // Shows all index's and data types

  echo $numbers[0];
?>


$colors = [
  1 => 'lonely',
  2 => 'Just as bad as one'
  4 => 'best',
];

<?php
  //Assosciative arrays (hash):
  $nums = [
    1 => 'lonely',
    2 => 'Just as bad as one',
    3 => "magic",
    4 => 'best',
  ];

  echo $nums[1];
?>

<?php
  //Multidimensional arrays (nested array):
  $many_nums = [
    [
      'One' => 'lonely',
      'Two' => 'Just as bad as one',
      'Three' => "magic",
      'Four' => 'best',
    ],
    [
      'One' => 'lonely',
      'Two' => 'Just as bad as one',
      'Three' => "magic",
      'Four' => 'best',
    ],
    [
      'One' => 'lonely',
      'Two' => 'Just as bad as one',
      'Three' => "magic",
      'Four' => 'best',
    ],
  ];

  // echo $nums[1][1];

  var_dump(json_encode($many_nums));  // Turns an assosciate array to JSON format.
?>
