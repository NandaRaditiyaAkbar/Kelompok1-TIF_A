<?php
$niali=75;
echo "CONTOH IF ELSE <br>";
if ($niali>80) { echo "selamat anda mendapatkan grade a <br>";}
elseif($niali>=70 && $niali <= 80) { echo " anda mendapatkan grade b <br>";}
else {echo "maaf anda belum mendapatkan grade a <br>";};

echo "CONTOH SWITCH <br>";
switch($niali){
    case 100 : echo "nilai yang anda dapat 100 <br>";
break;
case 90 : echo "nilai yang anda dapat 90 <br>";
break;
} 

echo "CONTOH FOR <br>";
for($i=1; $i<=5; $i++) {
    echo "looping FOR ke : ".$i."<br>";
}

echo "CONTOH WHILE <br>";
$j=1;
while($j<=5){
    echo "looping while ke : " .$j."<br>";
    if($j==3){
        echo "break while nilai" .$j."<br>"
    }

    $j++;
}
?>