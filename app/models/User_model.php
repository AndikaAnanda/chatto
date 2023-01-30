<?php
class User_model
{
    private $table = 'users';
    private $db;
    private $pass;

    public function __construct(){
        $this->db = new Database;
    }

    public function createAccount($data){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        
        $hashedpwd = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $query = "INSERT INTO users VALUES ('', :name, :email, :password, :status)";
        $this->db->query($query);
        $this->db->bind('name', $nama);
        $this->db->bind('email', $email);
        $this->db->bind('password', $hashedpwd);
        $this->db->bind('status', "0");


        $this->db->execute();
        return $this->db->rowCount();
    }

    public function verifyPass($username, $email){
        $pass = $this->pass;
        $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
    }
}
