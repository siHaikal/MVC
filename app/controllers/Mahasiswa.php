<?php

class Mahasiswa extends Controller{
    public function index() {
        $data["title"] = "Mahasiswa";
        $data['mhs'] = $this->model('Mahasiswa_model')->getList();
        $this->view('components/header', $data); 
        $this->view('mahasiswa/index', $data); 
        $this->view('components/footer');
    }

    public function detail($id) {
        $data["title"] = "Detail";
        $data['mhs'] = $this->model('Mahasiswa_model')->getDetail($id);
        $this->view('components/header', $data); 
        $this->view('mahasiswa/detail', $data); 
        $this->view('components/footer');
    }

    public function tambah() {
        if( $this->model('Mahasiswa_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header("Location: " . BASEURL . "/mahasiswa");
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header("Location: " . BASEURL . "/mahasiswa");
            exit;
        }
    }

    public function update() {
        $id = isset($_POST['id'])? $_POST['id'] : null;
        echo json_encode($this->model('Mahasiswa_model')->getDetail($id));
    }

    public function ubah () {
        if ($this->model('Mahasiswa_model')->updateData($_POST)  > 0 ) {
            Flasher::setFlash('Berhasil','diupdate', 'success');
            header("Location: ".BASEURL."/mahasiswa");
            exit;
        } else {
            Flasher::setFlash('Berhasil','diupdate', 'success');
            header("Location: ".BASEURL."/mahasiswa");
            exit;
        }
    }
}


?>