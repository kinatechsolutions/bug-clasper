<?php

namespace Kinatech\BugClasper;

class BugClasper
{
    protected array $config;

    public function __construct()
    {
        $this->config = config('')
    }

    public function report(\Exception $exception)
    {

    }
}