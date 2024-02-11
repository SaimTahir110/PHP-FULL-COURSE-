
<?php

function calculateRectangleArea($length, $width) {
    $area = $length * $width;
    return $area;
  }
  
  $rectangleLength = 5;
  $rectangleWidth = 10;
  $rectangleArea = calculateRectangleArea($rectangleLength, $rectangleWidth);
  echo $rectangleArea; // Output: 50

?>