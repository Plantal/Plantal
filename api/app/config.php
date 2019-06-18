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
        'app.db.host' => 'localhost',
        'app.db.port' => 3306,
        'app.db.name' => 'id9128078_plantal',
        'app.db.charset' => 'utf8',
        'app.db.user' => 'id9128078_plantal',
        'app.db.pwd' => '12345678',

        //Do not touch
        //=============================================
        'app.cache.db.connection' => null,
        'app.cache.permission' => null,
        'app.cache.exist' => null
    );
}
