<?php

class Logging
{
    public static function logger($message)
    {
      
        $DATE = DATE("Y-M-D-d h:i:s");
        $day = Date("Y-M-d");
        $LOG_FILE = "/var/www/html/error ".$day.".log";
        $MESSAGE = "[{$DATE}] $message \n";

        error_log($MESSAGE, 3, $LOG_FILE);

    }
}
