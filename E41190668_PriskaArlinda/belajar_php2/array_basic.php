<?php
$punakawan = array ("semar", "gareng", "petruk", "bagong");
echo $punakawan[0]; 
echo "<br>";
echo $punakawan[3];
echo "<br>";

$punakawan[1]="semar";
$punakawan[2]="gareng";
$punakawan[3]="petruk";
$punakawan[4]="bagong";
echo $punakawan[3];

echo "foreach<br>";
foreach ($punakawan as $nama){
    echo $nama."<br>";
};

echo "while <br>";
$i=0;
while ($i< count ($punakawan)){
    echo $punakawan[$i]."<br>";
    $i++;
}

echo "for <br>";
for($j=4; $j<0; $j--){
    echo $punakawan[$j]."<br>";
}
?>

