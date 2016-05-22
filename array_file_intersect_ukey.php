<?php
/**
 * Created by PhpStorm.
 * User: vanhung
 * Date: 5/22/2016
 * Time: 9:40 AM
 */

//ham nay thuc hien inner  join giua hai hay nhieu array giua cacs key va theo mot function nao day
//ket qua tra lai la nhung gia tri cua table dau tien trong menh de join thoa man dieu kien join

$a=[

    "name"=>"vanhung",
    "age"=>24
];

$b=[

    "name"=>"vanhungbk",
    "my_age"=>24
];

function compare($a,$b)
{

//    if(($a==$b)||strpos($b,$a)!==false)
//    {
//        return 0;
//    }
//
//    return -1;

    if($a==$b)
    {
        return 0;
    }elseif($a>$b)
    {
        return 1;
    }

    return -1;
};


//return all value if compare function return 0
$c=array_intersect_ukey($a,$b,'compare');


print_r($c);

$c=array_diff_ukey($a,$b,'compare');
print_r($c);