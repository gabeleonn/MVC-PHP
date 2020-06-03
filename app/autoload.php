<?php
$app = dirname(__FILE__);
spl_autoload_register(function($name) {
    global $app;
    if (isset(explode('\\', $name)[1])){
        $name = explode('\\', $name)[1];
    }
    
    if(file_exists($app . '\\bin\\'. $name . '.php')){
        require_once $app . '\\bin\\'. $name . '.php';
    } else if(file_exists($app . '\\Controllers\\'. $name . '.php')){
        require_once $app . '\\Controllers\\'. $name . '.php';
    }  else if(file_exists($app . '\\Views\\'. $name . '.php')){
        require_once $app . '\\Views\\'. $name . '.php';
    }
    else {
        echo 'File not Found';
    }
});


?>