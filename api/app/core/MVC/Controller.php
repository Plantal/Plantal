<?php

namespace App\Core\MVC;

use App\Core\Obj;

/**
 * The base class controller
 * @package App\Core\MVC
 */
class Controller extends Obj{

    public function __construct(){
        parent::__construct();
        $this->onInit();
    }

    public function onInit(){}

}
