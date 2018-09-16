<?php
/**
 * Created by PhpStorm.
 * User: manko
 * Date: 15.09.2018
 * Time: 20:52
 */

namespace Lottery;


class Lottery
{

    public function __construct()
    {

    }

    public function run()
    {
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) || !empty($_SERVER['HTTP_X_REQUESTED_WITH']) ||
            (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')){

            $this->startLottery();
        }
    }

    private function startLottery()
    {
        echo "startLottery";
    }
}