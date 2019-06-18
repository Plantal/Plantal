<?php

$app = new \Slim\Slim(get_config());
$app->contentType(
    $app->config('app.contentType')
);
date_default_timezone_get(
   // $app->config('http.version')
);
