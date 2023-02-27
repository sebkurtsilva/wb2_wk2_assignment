
<?php

function convertTemperature($temperature, $unit) {
  if ($unit == 'F') {
    $celsius = (5/9)*($temperature - 32);
    return round($celsius, 2) . ' C';
  } elseif ($unit == 'C') {
    $fahrenheit = (9/5)*$temperature + 32;
    return round($fahrenheit, 2) . ' F';
  } else {
    return 'Invalid unit specified.';
  }
}

echo convertTemperature(345, 'C'); // output: 212.00 F
echo convertTemperature(87, 'F'); // output: 0.00 C

?>

<h1> Sample</h1>

<?
$message = "Hello Letran";
echo $message;
?>

<hr>
<?php
 $a = 1;
 $b = 3;
 echo $a + $b;

 ?>
 <hr>
<?php
 
 echo $a + $b;

 ?>
 <hr>
 <?php
  function add($val1, $val2){
    return $val1 + $val2;

  }
  echo add(13, 15);
  echo "   ";
  echo add(137, 151);

  function sub($val1, $val2){
    return $val2 - $val2;
  }

  echo sub(13, 15);
  echo "   ";
  echo sub(137, 151);
  ?>
  <hr>

  // F = (9/5 x C) + 32
  // C =  5/9(F - 32)
