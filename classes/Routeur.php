<?php

// Create a routes and find controller

class Routeur
{
    private $request;

    private $routes = 
    [
        /** Routes  */
        
        "home"  => ["controller" => 'Home', "method" => 'View'],
        "add"  => ["controller" => 'Home', "method" => 'Created'],
        "update"  => ["controller" => 'Home', "method" => 'Updated'],
        "delete"  => ["controller" => 'Home', "method" => 'Delete'],
        
    ];


    public function __construct($request)
    {
        $this->request = $request;
    }

    public function renderController()
    {
        $request = $this->request;

        if (key_exists($request, $this->routes)) 
        {
            $controller = $this->routes[$request]['controller'];
            $method     = $this->routes[$request]['method'];

            $currentController = new $controller();
            $currentController->$method();
            # code...
        }else {
            include ('404.php');
        }
    }
}



