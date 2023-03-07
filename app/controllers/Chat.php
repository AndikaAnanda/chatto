<?php
    class Chat extends Controller{
        public function index(){
            
            $data['judul'] = 'Chatroom';
            $data['chat'] = $this->model('Chat_model')->getAllChat();
            $this->view('templates/header', $data);
            $this->view('chat/index', $data);
            $this->view('templates/footer');

        }

        public function submitChat(){
            if($this->model('Chat_model')->submitChat($_POST) > 0 ){
                header('Location: ' . BASEURL . '/chat');
                exit;
            } else {
                header('Location: ' . BASEURL . '/chat');
                exit;
            }
        }
    }