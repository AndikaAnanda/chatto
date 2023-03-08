<?php
    class Home extends Controller{
        public function index(){

            $data['judul'] = 'Chatto';
            
            $this->view('templates/header', $data);
            $this->view('home/index',$data);
            $this->view('templates/footer');
        }

        public function profile(){

            $data['judul'] = 'User Profile';
            
            $this->view('templates/header', $data);
            $this->view('home/profile',$data);
            $this->view('templates/footer');
        }
    }