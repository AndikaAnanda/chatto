<?php
    class Chat extends Controller{
        public function index(){
            
            $data['judul'] = 'Chatroom';
            $this->view('templates/header', $data);
            $this->view('chat/index', $data);
            $this->view('templates/footer');
        }
    }