<?php
class Flasher
{
    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan, 'aksi' => $aksi, 'tipe' => $tipe,
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
                Data Mahasiswa <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';

            unset($_SESSION['flash']);
        }
    }

    public static function flashReg()
    {
        if (isset($_SESSION['flash'])) {
            echo '<div class="bg-green-400 w-full">
                <div class="bg-green-400 px-2 py-1 rounded-md">
                <h2>Pengguna <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . ', link verifikasi telah dikirimkan ke email anda</h2>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            
            unset($_SESSION['flash']);
        }
    }
    public static function existFlash()
    {
        if (isset($_SESSION['flash'])) {
            echo '<div class="bg-green-400 w-full rounded-md px-2 py-3">
                
                <h2>Pengguna <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . ', ' . $_SESSION['flash']['tipe'] . '</h2>
                
              </div>';

            unset($_SESSION['flash']);
        }
    }
}
