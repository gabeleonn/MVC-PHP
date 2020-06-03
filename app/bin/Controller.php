<?php 

namespace Core;

class Controller
{
    public function render($view, $data = [])
    {   
        global $app;
        include_once $app.'\\Views\\'. $view .'.php';
    }

}



?>