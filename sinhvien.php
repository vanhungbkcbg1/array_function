<?php

/**
 * Created by PhpStorm.
 * User: vanhung
 * Date: 5/22/2016
 * Time: 5:30 PM
 */
 class sinhvien
{

    public $name;
    public $id;
    public function __construct($id,$name)
    {
        $this->id=$id;
        $this->name=$name;
    }
}