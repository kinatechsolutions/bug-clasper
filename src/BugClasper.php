<?php

namespace Kinatech\BugClasper;

use Exception;

class BugClasper
{
    protected array $config;

    public function __construct()
    {
        $this->config = config('bugClasper');
    }

    public function report(Exception $exception): void
    {
        $defaultConfigChannel = $this->config['channels'][$this->config['default']];

        (new $defaultConfigChannel['channel'])
            ->report($exception, $defaultConfigChannel);;
    }
}
