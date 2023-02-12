<?php
//ini wajib dipanggil paling atas
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

//ini sesuaikan foldernya ke file 3 ini
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

class Auth extends Controller
{
    public function index()
    {

        $data['judul'] = 'Sign-Up';
        $this->view('templates/header', $data);
        $this->view('auth/signup', $data);
        $this->view('templates/footer');
    }
    public function login()
    {

        $data['judul'] = 'Sign-In';
        $this->view('templates/header', $data);
        $this->view('auth/login', $data);
        $this->view('templates/footer');
    }

    public function register()
    {
        //Cek apabila nama user valid atau tidak
        if ($this->model('User_model')->invalidName($_POST['nama']) == false) {
            //Cek apabila nama user valid atau tidak
            if ($this->model('User_model')->invalidEmail($_POST['email']) == false) {
                //Cek apabila email user telah digunakan apa tidak
                if ($this->model('User_model')->emailExist($_POST['email']) == false) {
                    if ($this->model('User_model')->createAccount($_POST) > 0) {
                        Flasher::setFlash('berhasil', 'didaftarkan', 'success');
                        $mail = new PHPMailer(true);
                        try {
                            $nama = $_POST['nama'];
                            $email = $_POST['email'];

                            $token = md5($email) . md5($nama);
                            $url = "http://localhost/chatto/public/verify/index/$token";

                            //Server settings
                            $mail->isSMTP();                                            //Send using SMTP
                            $mail->Host       = 'smtp.gmail.com';                      //Set the SMTP server to send through
                            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                            $mail->Username   = 'emailverif.test987@gmail.com';         //SMTP username
                            $mail->Password   = 'ohwdnyvjwytjhuwy';                     //SMTP password
                            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                            $mail->SMTPSecure = 'tls';
                            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                            //Recipients
                            $mail->setFrom('emailverif.test987@gmail.com', 'Chatto');
                            $mail->addAddress($email, $nama);     //Add a recipient

                            //Content
                            $mail->isHTML(true);                                  //Set email format to HTML
                            $mail->Subject = 'Verify Email';
                            $mail->Body    = 'Terima kasih sudah mendaftar, berikut ini adalah url untuk memverifikasi akun anda :<br>' . $url;

                            $mail->send();
                        } catch (Exception $e) {
                            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                        }

                        header('Location: ' . BASEURL . '/auth/login');
                        exit;
                    } else {
                        Flasher::setFlash('gagal', 'didaftarkan', 'danger');
                        header('Location: ' . BASEURL . '/auth/signup');
                        exit;
                    }
                } else {
                    //ini redirect apabila email sudah terpakai
                    Flasher::setFlash('gagal', 'didaftarkan', 'Email telah terdaftar');
                    header('Location: ' . BASEURL . '/auth/signup');
                    exit;
                }
            } else {
                //ini redirect apabila email tidak valid
                Flasher::setFlash('gagal', 'didaftarkan', 'Email tidak valid');
                header('Location: ' . BASEURL . '/auth/signup');
                exit;
            }
        } else {
            //ini redirect apabila nama tidak valid
            Flasher::setFlash('gagal', 'didaftarkan', 'Nama tidak valid');
            header('Location: ' . BASEURL . '/auth/signup');
            exit;
        }
    }

    // ================================ HELPER ==================================
}
