<?php
//do while
$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
  } while ($x <= 5);
echo "<br>"; 

//for
for($h=1; $h<=5; $h++){
    echo "urutan ke $h<br>";
}
echo "<br>"; 

//while
$w=0;
while($w<=4){
    echo "angka $w <br>";
    $w++;
}
echo "<br>"; 

//foreach
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
echo "<br>"; 

$colors = array("red", "green", "blue", "yellow");
$i=1;
foreach ($colors as $key => $value) {
    if($key==2){
    break;
    }
  echo "$value <br>";
}
echo "<br>"; 

//break while (kalo for sama aja)
$r=1;
while($r<=7){
    if($r==5){
    break;
    }
    echo "lift melewati lantai $r<br>";
    $r++;
}
echo "<br>"; 

//continue for (kalo while sama aja)
for($q=11; $q<=15; $q++){
    if($q==13){
        continue;
    }
    echo "lantai ke $q<br>";
}
echo "<br>"; 

?>