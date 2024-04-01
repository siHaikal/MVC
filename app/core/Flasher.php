<?php
class Flasher {
    public static function setFlash($message, $aksi, $tipe) {
        $_SESSION['flash'] = [
            'pesan' => $message,
            'aksi' => $aksi,
            'type' => $tipe
        ];

    }

    public static function flash() {
        if (isset($_SESSION['flash'])) {
            echo 
            '<div class="alert alert-' . $_SESSION['flash']['type'] . ' alert-dismissible fade show" role="alert">
                Data <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            unset($_SESSION['flash']);
        }
    }
}

?>