<?php
$array = array( "hello", "world", "hello","aan","aan","Aan");


$data=array_count_values($array);

foreach ($data as $key => $value) {
  echo $key;
  echo "<br>";
  echo $value;
  echo "<br>";
  
  }

?>


<?php 
//I find a very simple solution to count values in multidimentional arrays (example for 2 levels) :

foreach ($array as $a) {
  foreach ($a as $b) {
    $count_values[$b]++;
  }
}
?>

