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
     * @param null $input
     * @param null $robot
     * @return mixed
     */
    function run($input = null, $robot = null);
}