<?php

namespace App\Core;

/**
 * The base superclass of the all classes of the application
 * @package App\Core
 */
class Obj{

    /**
     * The application instance
     * @var null|\Slim\Slim
     */
    protected $app;

    /**
     * Creates a new instance of the base class
     */
    public function __construct(){
        $this->app = instance();
    }

}
