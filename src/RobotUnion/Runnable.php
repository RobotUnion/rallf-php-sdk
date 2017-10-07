<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 10/7/17
 * Time: 4:11 PM
 */

namespace RobotUnion\Integration;


interface Runnable {

    /**
     * @param $input
     * @param $robot
     * @return mixed
     */
    function run($input, $robot);
}