<?php

class Router {
    private array $routes = [
        '/' => [ChatController::class],
        '/login' => [LoginController::class],
        '/logout' => [LoginController::class, 'logoutAction']
    ];

    public function run() {
        $session = new Session();
        $login = $session->get('login');

        $uri = $_SERVER['REQUEST_URI'];

        if (!isset($this->routes[$uri])) {
            echo '404';
            return;
        }

        $controller = new $this->routes[$uri][0];
        $action = $this->routes[$uri][1] ?? 'mainAction';
        $controller->$action();
    }
}