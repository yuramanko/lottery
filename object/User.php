<?php
/**
 * Created by PhpStorm.
 * User: manko
 * Date: 15.09.2018
 * Time: 21:43
 */

namespace Lottery;


class User
{
    private $name;
    private $phone;
    private $password;

    public function __construct()
    {
        $this->name = "John Doe";
        $this->phone = "3903454545";
        $this->password = "12345";
    }
}