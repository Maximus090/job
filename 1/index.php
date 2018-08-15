<?php
function prost($x)
{
    if ($x==2)
        return true;
    if ($x%2==0)
        return false;
    for($i=2; $i*$i<$x; $i++) {
        if($x%$i==0)
            return false;
    }
    return true;
}
$sum = 0;
for ($i=2; $i<2000000; $i++) {
    if (prost($i))
        $sum+=$i;
}
echo "Сумма простых чисел до 2000000 = ".$sum;
?>