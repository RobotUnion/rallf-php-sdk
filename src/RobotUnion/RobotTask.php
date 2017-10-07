<?php

namespace RobotUnion\Integration;

abstract class RobotTask implements Runnable, Cancelable, Debuggable, Testable {

    /**
     * @var Driver $driver
     */
    private $driver;

    /**
     * @var Logger $logger
     */
    private $logger;

    /** @var mixed $input */
    private $input;

    /** @var mixed $robot */
    private $robot;

    /**
     * RobotTask constructor.
     * @param Driver $driver
     * @param Logger $logger
     * @param $input
     * @param $robot
     */
    public function __construct(Driver $driver, Logger $logger, $input, $robot) {
        $this->driver = $driver;
        $this->logger = $logger;
        $this->input = $input;
        $this->robot = $robot;
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

    /**
     * @return mixed
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * @return mixed
     */
    public function getRobot()
    {
        return $this->robot;
    }


}