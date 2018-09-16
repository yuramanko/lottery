<?php
/**
 * Created by PhpStorm.
 * User: manko
 * Date: 15.09.2018
 * Time: 20:44
 */

namespace Authentication;

use User\User;

class Authentication
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function checkAuthentication()
    {
        if (!$this->user->getToken()){
            if($this->authentication())
                return true;
            else
                return false;
        }
        else
            return true;
    }

    private function authentication()
    {
        if (($_POST['username'] == $this->user->getPhone() )
            && ($_POST['password'] == $this->user->getPassword())){
                $this->user->generateToken();
            return true;
        }else{
            return false;
        }
    }
}