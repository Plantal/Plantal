<?php

namespace App\Controllers;

use App\Core\MVC\Controller;

class CHome extends Controller{

    public function homeAction(){
        $this->app->status(400);
        echo "{}";
    }

}
