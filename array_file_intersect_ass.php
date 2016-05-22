<?php
/**
 * Created by PhpStorm.
 * User: vanhung
 * Date: 5/22/2016
 * Time: 9:27 AM
 */

$a=[

    "name"=>"vanhung",
    "age"=>24
];

$b=[

    "name"=>"vanhungbk",
    "my_age"=>24
];

//array interect ham nay dung de inner join giua hai array voi dieu kien value cua array nay bang value cua
//array kia va key cua array nay bang key cua array kia va tra lai nhung gia tri cua array nay neu thoa man dieu kien join
$c=array_intersect_assoc($a,$b);

print_r($c); //this return empty array

$a=[

    "name"=>"vanhung",
    "age"=>24
];

$b=[

    "name"=>"vanhungbk",
    "age"=>24
];

$c=array_intersect_assoc($a,$b);
print_r($c);//this return ["age"=>24]



$a=[

    "name"=>"vanhung",
    "age"=>24,
    "vanhung",
    "vanhung"
];

$b=[

    "vanhungk",
    "name"=>"vanhungbk",
    "age"=>24,
    "vanhung"
];
//trong truong hop tren thi danh index tu phan tu la 0
//co the viet lai mang tren nhu sau
//$a=[
//
//    "name"=>"vanhung",
//    "age"=>24,
//    0=>"vanhung",
//    1=>"vanhung"
//];
//
//$b=[
//
//    0=>"vanhungk",
//    "name"=>"vanhungbk",
//    "age"=>24,
//    1=>"vanhung"
//];
$c=array_intersect_assoc($a,$b);
print_r($c);

//return

//Array
//(
//    [age] => 24
//    [1] => vanhung
//)

