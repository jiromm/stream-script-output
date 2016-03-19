<?php

$fp = popen('/bin/bash deploy.sh', 'r');

while ($line = stream_get_line($fp, 65535, PHP_EOL)) {
    echo $line . PHP_EOL;

    ob_flush();
    flush();
}
