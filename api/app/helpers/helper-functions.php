<?php

/**
 * Gets the application instance
 * @return null|\Slim\Slim
 */
function instance(){
   return \Slim\Slim::getInstance();
}

/**
 * Gets the database connection
 * @return mixed|PDO
 */
function &database(){
    $_ = new \App\Core\Database();
    return $_->getHandler();
}


