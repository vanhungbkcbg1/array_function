<?php
/**
 * Created by PhpStorm.
 * User: vanhung
 * Date: 5/22/2016
 * Time: 9:36 AM
 */

$a=[

    "name"=>"vanhung",
    "age"=>24
];

$b=[

    "name"=>"vanhungbk",
    "my_age"=>24
];

$c=array_intersect_key($a,$b);

//ham nay se thuc hien inner join theo key giua hai hay nhieu array va tra lai nhung ket qua thoa man dieu kien join

print_r($c);

//return ["name"=>"vanhung"]