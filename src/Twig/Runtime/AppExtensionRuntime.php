<?php

namespace App\Twig\Runtime;

use DateTime;
use Error;
use Exception;
use Twig\Extension\RuntimeExtensionInterface;

class AppExtensionRuntime implements RuntimeExtensionInterface
{
    public function __construct()
    {
        // Inject dependencies if needed
    }

    public function getDatetimeFromTimestamp(int $timestamp):DateTime
    {
        if (is_integer($timestamp) == false) throw new Error("Le timestamp n'a pas le bon format");

        $result = (new DateTime())->setTimestamp($timestamp);
        return $result;
    }
}
