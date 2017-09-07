<?php

require_once '../vendor/autoload.php';

use Carbon\Carbon;

date_default_timezone_set(getenv('TZ'));

$res = [
    'now' => Carbon::now()
];

print_r(json_encode($res));