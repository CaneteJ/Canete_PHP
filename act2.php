<?php
   
function root($num){
    $res = array();
    for($var = 1; $var <= $num; $var++){
        $res [$var] = round(sqrt($var),2);
    }
    return $res;
 }
   
$value = root(9);
for($value = 0; $value <= array.lenght(); $value++){
    $result = $res[$value];
    $display = $array [$result];
}
?>