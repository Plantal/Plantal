<?php

/**
 * Gets the application config
 */
function get_config(){
    return array(

        //General settings
        //=============================================
        'debug'           => true,
        'http.version'    => '1.1',
        'app.contentType' => 'application/json; charset=utf-8',
        'app.timezone'    => 'UTC',

        //Database settings
        //=============================================
        'app.db.host' => '127.0.0.1',
        'app.db.port' => 3306,
        'app.db.name' => 'plantal',
        'app.db.charset' => 'utf8',
        'app.db.user' => 'root',
        'app.db.pwd' => '123456',

        //Do not touch
        //=============================================
        'app.cache.db.connection' => null,
        'app.cache.permission' => null,
        'app.cache.exist' => null
    );
}
