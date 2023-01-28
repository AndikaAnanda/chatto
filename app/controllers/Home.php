<?php
    class Home extends Controller{
        public function index(){

            $data['judul'] = 'Chatto';
            
            $this->view('templates/header', $data);
            $this->view('auth/login',$data);
            $this->view('templates/footer');
        }
    }