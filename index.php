<?php
function addCol($arr){
    $sum=0;
    for($i=0;$i<count($arr);$i++){
        $sum=$sum+$arr[$i][1];
    }
    return $sum;
}
$arr =[
    [1,2,3,4],
    [1,2,3,4],
    [1,2,3,4],
    [1,2,3,4],

];
var_dump($arr);
echo addCol($arr);
