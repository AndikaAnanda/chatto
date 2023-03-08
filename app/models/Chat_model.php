<?php
    class Chat_model{
        private $table ='chatroom';
        private $db;

        public function __construct()
        {   
            $this->db = new Database;
        }

        public function getAllChat(){
            $this->db->query('SELECT * FROM '. $this->table .' ORDER BY chat_id DESC LIMIT 15');
            return $this->db->resultSet();
        }

        public function submitChat($data){
            $timestamp = date("Y-m-d H:i:s");
            $query = "INSERT INTO chatroom VALUES ('', :chat_sender, :chat_message, :chat_timestamp)";
            $this->db->query($query);
            $this->db->bind('chat_sender', $data['chat_sender']);
            $this->db->bind('chat_message', $data['chat_message']);
            $this->db->bind('chat_timestamp', $timestamp);
            

            $this->db->execute();
            return $this->db->rowCount();
        }
    }