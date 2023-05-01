<?php

class LoginController {

    public function mainAction () {
        $session = new Session();
        $post = new Post();
        $cookie = new Cookie();
        $view = new View();

        if (!$session->has('login') && $post->has('user_login')) {
            $session->add('login', $post->get('user_login'));
        }
        
        $view->render('login', [
            'theme' => $cookie->get('theme'),
        ]);
    }

}