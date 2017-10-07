<?php

namespace RobotUnion\Integration;

abstract class RobotTask implements Runnable, Cancelable, Debuggable {

    /**
     * @var Driver $driver
     */
    private $driver;

    /**
     * @var Logger $logger
     */
    private $logger;

    /**
     * RobotTask constructor.
     * @param Driver $driver
     * @param Logger $logger
     */
    public function __construct(Driver $driver, Logger $logger) {
        $this->driver = $driver;
        $this->logger = $logger;
    }

    /**
     * @return Driver
     */
    public function getDriver(): Driver {
        return $this->driver;
    }

    /**
     * @return Logger
     */
    public function getLogger(): Logger {
        return $this->logger;
    }


    function cancel($reason = null)
    {
        // TODO: Implement cancel() method.
    }

    function abort($reason = null)
    {
        // TODO: Implement abort() method.
    }




}