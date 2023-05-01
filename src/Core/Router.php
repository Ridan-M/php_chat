<?php

class Router {

    public function run() {
        $session = new Session();
        $login = $session->get('login');

        if (!$login) {
            $loginController = new LoginController();
            $loginController->mainAction();
        } else {
            $chatController = new ChatController();
            $chatController->mainAction();
        }
    }
}