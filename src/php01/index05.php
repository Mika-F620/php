<?php
for($i=1; $i<6; $i++){
  echo 2*$i;
  echo '<br>';
}

$count=1;

while($count<=20){
  echo $count;
  echo '<br>';

  $count += 1;
}

$count=0;

while($count<=100){
  if($count%3===0){
    $count++;
    continue;
  }

  if($count===20){
    break;
  }

  echo $count;
  echo '<br>';
  $count++;
}

$num = 0;

do{
  echo 'num = '.$num;
  $num++;
  echo '<br>';
}while($num<3);


for($i=1; $i<=50; $i++){
  if($i % 3 === 0 && $i % 5 === 0){
    echo 'FizzBuzz';
    echo '<br>';
    
  }elseif($i % 5 === 0){
    echo 'Buzz';
    echo '<br>';
  }elseif($i % 3 === 0){
    echo 'Fizz';
    echo '<br>';
  }else{
    echo $i;
    echo '<br>';
  }
}

for($i=1; $i<6; $i++){
  for($j=1; $j<6; $j++){
    echo '⚫︎';
  }
  echo '<br>';
}