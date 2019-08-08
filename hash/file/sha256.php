<?php

$dir = dirname(__FILE__);

$file = $argv[1];
chdir($dir);

$s = file_get_contents($file);

echo hash("sha256", $s);
