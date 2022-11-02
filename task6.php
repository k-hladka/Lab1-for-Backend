<?php
$rand = mt_rand(100, 999);
$three = $rand%10;
$two = ((int)($rand/10))%10;
$one = (int)($rand/100);

$sum = $three+$two+$one;
$inverse = $three*100 + $two*10 + $one;

$max = max($three, $two, $one);
$min = min($three, $two, $one);

if($three!==$max && $three!==$min)
    $mid = $three;
elseif($two!== $max && $two!==$min)
    $mid = $two;
else
    $mid = $one;

$resMaxNumber = $max*100 + $mid*10 + $min;

echo "Випадкове чило $rand <br>
      Сума його цифр: $sum <br>
      Зворотнє число: $inverse <br>
      Максимальним числом із його цифр є: $resMaxNumber";


