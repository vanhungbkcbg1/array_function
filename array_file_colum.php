<?php
/**
 * Created by PhpStorm.
 * User: vanhung
 * Date: 5/22/2016
 * Time: 5:32 PM
 */

include_once 'sinhvien.php';

$sinhviens=[

  new sinhvien("1","vanhug1"),
  new sinhvien("2","vanhug2"),
  new sinhvien("3","vanhug3"),
  new sinhvien("4","vanhug4"),
  new sinhvien("5","vanhug5"),
  new sinhvien("6","vanhug6"),
];

print_r($sinhviens);

//using array column to get all sinhvien id

print_r(array_column($sinhviens,"name"));
print_r(array_column($sinhviens,"id"));