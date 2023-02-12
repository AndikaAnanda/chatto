<?php
    class Verify extends Controller{
        public function index($token){
            $data['judul'] = 'Verify Email';
            $data['token']= $token;
            $this->view('templates/header', $data);
            $this->view('verification/index', $data);
            $this->view('templates/footer');
        }
    }