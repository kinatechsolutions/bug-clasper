<?php
namespace Kinatech\BugClasper\Channels;

use Exception;

interface ChannelInterface
{
    public function report(Exception $exception, array $config = []): void;
}
