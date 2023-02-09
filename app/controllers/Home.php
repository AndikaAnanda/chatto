<?php
    class Home extends Controller{
        public function index(){

            $data['judul'] = 'Chatto';
            
            $this->view('templates/header', $data);
            $this->view('about/index',$data);
            $this->view('templates/footer');
        }
    }