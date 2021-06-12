<?php
/**
 * l’entier le plus proche de 5
 * @param array $nums
 * @param int $min
 * @return mixed|null
 */
function getMinFromArrya(array $nums, int $min = 5)
{
    sort($nums);
    $result = [];
    foreach ($nums as $index => $num) {
        if (($num - $min) <=0) {
            $result[$index] = $num - $min;
        }
    }

    return $nums[array_search(max($result), $result)] ?? null;
}

$var1 = [1,3,9,10,2,-5] ;
$var2 = [10,6,7,4,8,15,-10,-6,-7,-4,-8,-15] ;
$var3 = [8,5,3];
echo "l’entier le plus proche de 5 <br>";
print_r($var1);
echo '<br/>';
echo getMinFromArrya($var1).'<br/>';
echo '<br/>';
print_r($var2);
echo '<br/>';
echo getMinFromArrya($var2).'<br/>';
echo '<br/>';
print_r($var3);
echo '<br/>';
echo getMinFromArrya($var3).'<br/>';
