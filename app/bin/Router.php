<?php

class Router
{

    public function start(){
        $url = $_GET['url'] == null ? 'home' : $_GET['url'];

        if(file_exists('../app/Controllers/'. $url . '.php')){
            $className = 'Controllers\\'.ucfirst($url);
            $controller = new $className();
            $controller->render($url);

        } else {
            include_once '..\\app\\Views\\notFound.php';
        }
    }
    
}


?>