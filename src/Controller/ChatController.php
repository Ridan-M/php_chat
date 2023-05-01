<?php

class ChatController {

    public function mainAction () {
        $messagesStorage = new MessagesStorage();
        $session = new Session();
        $cookie = new Cookie();
        $post = new Post();
        $view = new View();

        $login = $session->get('login');

        if (!$login) {
            header('Location: /login');
        }

        $message = $post->get("user_message");

        if($message && $login){
            if ($message == 'set_night_theme') {
                $cookie->add('theme', 'night');
            }else if ($message == 'set_light_theme') {
                $cookie->delete('theme');
            } else {
                $newMessage = [
                    'message' => $message,
                    'login' => $login,
                    'time' => time()
                ];
                $messagesStorage->addMessage($newMessage);
            }
        }

        $view->render('chat', [
            'messages' => $messagesStorage->getMessages(),
            'theme' => $cookie->get('theme'),
        ]);
    }
}