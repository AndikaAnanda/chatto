<?php
    class Home extends Controller{
        public function index(){

            $data['judul'] = 'Chatto';
            
            $this->view('templates/header', $data);
            $this->view('chat/index',$data);
            $this->view('templates/footer');
        }
    }