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
        $token = md5($email).md5($nama);
        
        $hashedpwd = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $query = "INSERT INTO users VALUES ('', :name, :email, :password, :token, :status)";
        $this->db->query($query);
        $this->db->bind('name', $nama);
        $this->db->bind('email', $email);
        $this->db->bind('password', $hashedpwd);
        $this->db->bind('token', $token);
        $this->db->bind('status', "0");


        $this->db->execute();
        return $this->db->rowCount();
    }

    public function verifyToken($token){
        $this->db->query('UPDATE '. $this->table .' set status = "1" WHERE token=:token ');
        $this->db->bind('token', $token);
        $this->db->execute();
    }

    public function verifyPass($username, $email){
        $pass = $this->pass;
        $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
    }
}
