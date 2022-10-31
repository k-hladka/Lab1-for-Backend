<?php
$dollar = 29;
$grn = 1800;
$res = (int)($grn/$dollar);
$str = match($res%10){
  0, 5, 6, 7, 8, 9 => 'доларів',
  1 => 'долар',
  2, 3, 4 => 'долари',
};
echo "$grn грн. можна обміняти на $res $str";
