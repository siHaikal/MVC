<?php

class About extends Controller{
    public function index ($nama = 'Haikal', $role = 'mahasiswa', $umur = 20) {
        $data['nama'] = $nama;
        $data[ 'role' ]= $role;
        $data['umur'] = $umur;
        $data['title'] = 'Halaman About';
        $this->view('components/header', $data); 
        $this->view('about/index'); 
        $this->view('components/footer');
    }

    public function page () {
        $data['title'] = 'About Page';
        $this->view('components/header', $data); 
        $this->view('about/page'); 
        $this->view('components/footer');
    }
}

?>