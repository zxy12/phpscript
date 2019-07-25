<?php

$s = $argv[1];

echo $h = crc32($s);

echo PHP_EOL;

echo $h % 100;
