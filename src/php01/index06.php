<?php
function outputNumber($a)
{
  echo "引数の値は" . $a . "です";
  return;
}

outputNumber(2);
echo '<br>';


function outputHello()
{
  echo "Hello world";
}

outputHello(); // ①
echo '<br>';


function text($number1, $number2)
{
  $value = $number1 + $number2;
  return $value;
}

$total = text(2, 4);
echo $total;
echo '<br>';


function text2($number3, $number4)
{
  $value = $number3 + $number4;
  return $value;
}

$total = text2(2, 3);
echo $total;
echo '<br>';


function score($score1, $score2, $score3){
  $value = $score1 + $score2 + $score3;

  if($value > 210){
    echo '合計点は' . $value . 'なので合格です'; 
  }else{
    echo '合計点は' . $value . 'なので不合格です'; 
  }

  return;
}

$total = score(20, 60, 90);
echo $total;
echo '<br>';


function triangle($width, $height){
  $value = ($width + $height) / 2;
  return $value;
}

$sideness = triangle(20, 15);
echo $sideness;
echo '<br>';

function square($width, $height){
  $value = $width * $height;
  return $value;
}

$sideness = square(4, 5);
echo $sideness;
echo '<br>';


function trapezoid($top, $bottom, $height){
  $value = ($top + $bottom) * $height / 2;
  return $value;
}

$sideness = trapezoid(4, 5, 7);
echo $sideness;
echo '<br>';