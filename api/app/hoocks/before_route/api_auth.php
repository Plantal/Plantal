<?php
$app=instance();

$app->hook('slim.before.router', function() use ($app){

    //////
    $username="teste";
    $password="teste";
    /////

    /*if (!isset($_SERVER['PHP_AUTH_USER'])) {

        $app->response->header('WWW-Authenticate','Basic realm="My Realm"');
        $app->status(401);
        $app->stop();

    } else {
        $user=$_SERVER['PHP_AUTH_USER'];
        $pass=$_SERVER['PHP_AUTH_PW'];
        if($user!==$username || $password!==$pass){
            $app->status(401);
            $app->stop();
        }

    }*/

});
