<?php 
namespace App\core;

class Router{
    protected array $route = [];
    protected array $middleware = [];


    function get(string $path, callable $callback){
        $this->route["GET"][$path] = $callback;
    }

    function post(string $path, callable $callback){
        $this->route["POST"][$path] = $callback;
    }

    function middleware(string $path, callable $callback){
        $this->middleware[$path][] = $callback;
    }

    function resolve(){
        $method = strtoupper($_SERVER["REQUEST_METHOD"]);
        $path = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/') ?: '/';
        $path = explode("?", $path)[0];
        $callback = $this->route[$method][$path] ?? NULL;

        if ($callback === NULL) {
            http_response_code(404);
            die("404 Not Found Page");
        }

        foreach ($this->middleware[$path] ?? [] as $middleware) {
            $middleware();
        }

        return $callback();
    }
}