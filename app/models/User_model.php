<?php
    class User_model{
        private $table ='users';
        private $db;

        public function __construct()
        {   
            $this->db = new Database;
        }

        public function createAccount($data){
            $query = "INSERT INTO users VALUES ('', :name, :email, :password)";
            $this->db->query($query);
            $this->db->bind('name', $data['nama']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('password', $data['password']);
            

            $this->db->execute();
            return $this->db->rowCount();
        }
    }