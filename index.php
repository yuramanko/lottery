<?php
/**
 * Created by PhpStorm.
 * User: manko
 * Date: 15.09.2018
 * Time: 15:27
 */

require_once __DIR__ . '/config.php';

use Authentication\Authentication;
use Lottery\Lottery;

$auth = new Authentication();

if ($auth->checkAuthentication()){
    require_once "./view/index.php";
    $lottery = new Lottery();
    $lottery->run();
}
else
    require_once "./view/login.php";

