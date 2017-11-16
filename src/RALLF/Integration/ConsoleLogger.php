<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 11/16/17
 * Time: 7:42 PM
 */

namespace RALLF\Integration;

class ConsoleLogger extends AbstractLogger {

    /**
     * @param string $message
     * @param mixed $data
     * @param int $severity , standard RFC3164 code (https://tools.ietf.org/html/rfc3164)
     * @param string $channel
     */
    function log($message, $data = null, $severity = Logger::SEVERITY_DEBUG, $channel = "")
    {
        echo "$channel[$severity]: $message";
        if($data != null) echo " (" . json_encode($data) . ")";
        echo "\n";
    }
}