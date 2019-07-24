<?php

$s = file_get_contents("./0d0db4a9a37e055a588436bf0a5176b3.jpeg");

echo hash("sha256", $s);
