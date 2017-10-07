<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 10/7/17
 * Time: 4:09 PM
 */

namespace RobotUnion\Integration;


interface Cancelable {
    function cancel($reason = null);
    function abort($reason = null);
}