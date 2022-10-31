<?php
$masRand = array();
for($i=0; $i<4; $i++){
    $rand = mt_rand(1,6);
    $masRand[$i] = $rand;
}
$ivanNumber = $masRand[0]+$masRand[1];
$robotNumber = $masRand[2]+$masRand[3];
echo "У Івана випало $masRand[0] і $masRand[1] <br>
      У робота випало $masRand[2] і $masRand[3] <br>";

echo ($ivanNumber > $robotNumber) ? "Іван переміг" : (($ivanNumber < $robotNumber) ? "Робот переміг" : "Нічия");
