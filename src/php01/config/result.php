<?php
  $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
  $goods = htmlspecialchars($_POST['goods'], ENT_QUOTES);
  $number = htmlspecialchars($_POST['num'], ENT_QUOTES);

  echo "私の名前は、" . $name;
  echo "<br>";
  echo "ご希望の商品は、" . $goods;
  echo "<br>";
  echo "注文数は、" . $number;
