<?php
class User_model
{
    private $table = 'users';
    private $db;
    private $pass;

    public function __construct(){
        $this->db = new Database;
    }
    //=============================== MAIN LOGIC HERE ======================================
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

    // =============================== END MAIN LOGIC =======================================

    public function verifyToken($token){
        $this->db->query('UPDATE '. $this->table .' set status = "1" WHERE token=:token ');
        $this->db->bind('token', $token);
        $this->db->execute();
    }

    public function invalidName($nama){
		if (preg_match("/^[a-zA-Z-' ]*$/",$nama)){
			return false;
		}
		else {
			return true;
		}
	}

	public function invalidEmail($email){
		if (filter_var($email, FILTER_VALIDATE_EMAIL)){
			return false;
		}
		else {
			return true;
		}
	}
    public function emailExist($email){
        $this->db->query('SELECT * FROM '. $this->table .' WHERE email = :email');
        $this->db->bind('email', $email);
        $user = $this->db->single();
        if($user != null){
            return true;
        }else{
            return false;
        }
    }
}
