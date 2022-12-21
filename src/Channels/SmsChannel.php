<?php

namespace Kinatech\BugClasper\Channels;

use Exception;

class SmsChannel implements ChannelInterface
{
    public function report(Exception $exception, array $config = []): void
    {
        // TODO: Implement report() method.
    }
}
