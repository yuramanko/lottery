<?php
/**
 * Created by PhpStorm.
 * User: manko
 * Date: 15.09.2018
 * Time: 15:27
 */

namespace lottery;
require_once __DIR__ . '/object/Lottery.php';

$lottery = new Lottery();
$lottery->run();