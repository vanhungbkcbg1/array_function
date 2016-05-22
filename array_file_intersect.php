<?php
/**
 * Created by PhpStorm.
 * User: vanhung
 * Date: 5/22/2016
 * Time: 9:22 AM
 */

$a=[

  "name"=>"vanhung",
    "age"=>24
];

$b=[

    "name"=>"vanhungbk",
    "age"=>24
];

//array interect ham nay dung de inner join giua hai array voi dieu kien value cua array nay bang value cua
//array kia va tra lai nhung gia tri cua array nay neu thoa man dieu kien join
$c=array_intersect($a,$b);

print_r($c);
//=>result is
//Array
//(
//    [age] => 24
//)
