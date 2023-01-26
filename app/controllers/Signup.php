<?php
    class Signup extends Controller{
        public function index(){

            $data['judul'] = 'Sign-Up';
            $this->view('templates/auth-header', $data);
            $this->view('signup/index',$data);
            $this->view('templates/footer');
        }
        public function login(){

            $data['judul'] = 'Sign-In';
            $this->view('templates/header', $data);
            $this->view('signup/login',$data);
            $this->view('templates/footer');
        }

        public function register(){
            if($this->model('User_model')->createAccount($_POST) > 0 ){
                header('Location: ' . BASEURL . '/mahasiswa');
                exit;
            } else {
                header('Location: ' . BASEURL . '/mahasiswa');
                exit;
            }
        }
    }