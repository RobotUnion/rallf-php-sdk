<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 10/7/17
 * Time: 2:45 PM
 */

namespace RobotUnion\Integration;

interface Driver {
    function getUri();
    function getCapabilities();
}