<?php

namespace App\Twig\Runtime;

use DateTime;
use Twig\Extension\RuntimeExtensionInterface;

class AppExtensionRuntime implements RuntimeExtensionInterface
{
    public function __construct()
    {
        // Inject dependencies if needed
    }

    public function getDatetimeFromTimestamp(int $timestamp):DateTime
    {
        $result = (new DateTime())->setTimestamp($timestamp);
        return $result;
    }
}
