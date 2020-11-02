<?php
//first method
$salaries = array(
    "mohammad" => 2000,
    "qadir" => 1000,
    "zara" => 500
);

echo "salary of mohammad is ".$salaries['mohammad']."<br/>";
echo "salary of qadir is ".$salaries['qadir']."<br/>";
echo "salary of zara is ".$salaries['zara']."<br/>";
//second method
$salaries['mohammad'] = "high";
$salaries['qadir'] = "medium";
$salaries['zara'] = "low";

echo "salary of mohammad is ".$salaries['mohammad']."<br/>";
echo "salary of qadir is ".$salaries['qadir']."<br/>";
echo "salary of zara is ".$salaries['zara']."<br/>";
?>