<?php

$app = instance();

$app->map("/", function() use ($app){
    (new \App\Controllers\CHome())->homeAction();
})
->via('ANY');

$app->notFound(function(){
    echo "{}";
});

$app->error(function(){
    echo "{}";
});
