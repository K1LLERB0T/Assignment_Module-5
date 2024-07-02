<?php

$num1 = 4;
$num2 = 5;
$num3 = 6;

if($num1 > $num2 && $num1 > $num3)
{
    $largeNum = $num1;
}
else if($num2 > $num1 && $num2 > $num3)
{
    $largeNum = $num2;
}
else
{
    $largeNum = $num3;
}

echo "The largest number is: $largeNum";
?>