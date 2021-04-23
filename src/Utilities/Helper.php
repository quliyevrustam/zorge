<?php

namespace Utilities;

use Exception;

class Helper
{
    /**
     * @param $expression
     */
    public static function prePrint($expression): void
    {
        echo '--------------------';
        echo '<pre>';
        print_r($expression);
        echo '</pre>';
        echo '--------------------';
    }

    /**
     * @param $date
     * @param $timezoneFrom
     * @param $timezoneTo
     * @param string $format
     * @return string
     * @throws Exception
     */
    public static function timezoneConverter($date, $timezoneFrom, $timezoneTo, $format = 'Y-m-d H:i:s')
    {
        $handler = new \DateTime($date, new \DateTimeZone($timezoneFrom));
        $handler->setTimezone(new \DateTimeZone($timezoneTo));
        return $handler->format($format);
    }

    /**
     * @param string $errorMessage
     */
    public static function logError(string $errorMessage): void
    {
        error_log('['.date('Y-m-d H:i:s').'] '.$errorMessage."\n\n", 3, ERROR_LOG_PATH);
    }
}