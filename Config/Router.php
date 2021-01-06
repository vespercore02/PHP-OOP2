<?php 

class Router {

    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->run();

        //print_r($url);
        if (file_exists('Controllers/'. ucwords($url[0]) .'.php' )) {
            # code...
            $this->controller = ucwords($url[0]);
            unset($url[0]);

        }else {
            $this->controller = "Info";

        }

        require_once 'Controllers/'. $this->controller . '.php';

        $this->controller = new $this->controller;

        if (isset($url[1])) {
            # code...
            if (method_exists($this->controller, $url[1])) {
                # code...
                $this->method = $url[1]; 
                unset($url[1]);
            }
        }


        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function run()
    {
        $url = rtrim($_SERVER['QUERY_STRING'], '/');

            $url = filter_var($url, FILTER_SANITIZE_URL);

            $url = explode('/', $url);

            return $url;
    }
}

?>