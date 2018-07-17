<?php

class Logging
{
    public static function logger($message)
    {

        $DATE = DATE("Y-M-D H:M:S");
        $LOG_FILE = "/var/www/html/error".$DATE."log";
        $MESSAGE = "[{$DATE}] $message \n";

        error_log($MESSAGE, 3, $LOG_FILE);

    }
}
