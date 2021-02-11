<?php
require_once './vendor/autoload.php';

use Illuminate\Support\Env;

$outs = Env::get('APP_NAME');

echo $outs;
