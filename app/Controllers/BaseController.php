<?php

namespace App\Controllers;

use eftec\bladeone\BladeOne;

class BaseController
{
    function render($viewFile, $data = [])
    {
        $views = "./app/views";
        $cache = "./app/Cache";
        $blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG);
        echo $blade->run($viewFile, $data);
    }
}
