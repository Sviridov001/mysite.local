<?php

$dt = time();
$page = $_SERVER("REQUEST_URI");
$ref = $_SERVER("HTTP_REFERER");
$path = "$dt|$page|$ref/n";


