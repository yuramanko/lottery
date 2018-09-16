<?php
/**
 * Created by PhpStorm.
 * User: manko
 * Date: 15.09.2018
 * Time: 21:43
 */

namespace User;


class User
{
    private $name;
    private $phone;
    private $password;
    private $token;

    public function __construct()
    {
        $this->name = "John Doe";
        $this->phone = "1";
        $this->password = "1";
        $this->token = $_SESSION['userToken'];
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }


    public function generateToken()
    {
        session_start();
        $this->token = md5("345235235");
        $_SESSION["userToken"] = $this->token;
        session_write_close();
    }


}
