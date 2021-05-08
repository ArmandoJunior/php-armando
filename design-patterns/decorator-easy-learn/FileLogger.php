<?php


class FileLogger
{
    public function log($msg)
    {
        echo "<p>Logging to a file: $msg</p>";
    }
}

$log = new FileLogger();
$log->log("saving file");