<?php

namespace App\Core;

/**
 * Application database handler
 * @package App
 */
class Database extends Obj{

    /**
     * @var \PDO
     */
    private $pdo;

    /**
     * Creates a new instance of the Database class
     */
    public function __construct(){
        parent::__construct();
        if(!$this->app->config('app.cache.db.connection')){
            $this->app->config(
                'app.cache.db.connection',
                new \PDO(
                    'mysql:'                                                    .
                    'host='    .$this->app->config('app.db.host')               .';'.
                    'port='    .strval($this->app->config('app.db.port'))       .';'.
                    'dbname='  .$this->app->config('app.db.name')               .';'.
                    'charset=' .$this->app->config('app.db.charset'),
                    $this->app->config('app.db.user'),
                    $this->app->config('app.db.pwd')
                )
            );
        }
        $this->pdo = $this->app->config('app.cache.db.connection');
    }

    /**
     * Gets the database handler
     * @return mixed|\PDO
     */
    public function &getHandler(){
        return $this->pdo;
    }

}
