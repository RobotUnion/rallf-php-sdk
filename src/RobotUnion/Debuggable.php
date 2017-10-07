<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 10/7/17
 * Time: 4:12 PM
 */

namespace RobotUnion\Integration;


interface Debuggable {
    /**
     * @return Logger
     */
    function getLogger(): Logger;
}