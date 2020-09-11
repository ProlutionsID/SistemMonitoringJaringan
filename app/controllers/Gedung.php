<?php

class Gedung extends Controller
{

    public function __construct() {
        if ( !isset($_SESSION['status']) || 
            ( isset($_SESSION['status']) && $_SESSION['status'] != 'Admin' ) ) {

          header('Location:' .BASEURL. '/Login');
          exit();
        }
    }

    public function index($id = FALSE) 
    {
        $data['page'] = 'Gedung';
        $data['arr'] = $this->model('Gedung_model')->select();
        if($id == FALSE){
            $data['judul'] = 'Gedung';
            $this->view('admin/templates/header', $data);
            $this->view('admin/gedung/index', $data);
            $this->view('admin/templates/footer');
        }else{
            $data['judul'] = 'Add Gedung';
            $this->view('admin/templates/header', $data);
            $this->view('admin/gedung/add', $data);
            $this->view('admin/templates/footer');
        }
    }

    public function add() 
    {
        $this->model('Gedung_model')->add_gedung();
        $_SESSION['pesan'] = 'Data berhasil di tambah!!!';
        header('Location:' .BASEURL. '/Gedung/index');
    }

    public function edit($id) 
    {
        $data['page'] = 'Gedung';
        $data['judul'] = 'Edit Gedung';
        $data['gedung'] = $this->model('Gedung_model')->select($id);
        $this->view('admin/templates/header', $data);
        $this->view('admin/gedung/edit', $data);
        $this->view('admin/templates/footer');
    }

    public function save() 
    {
        $this->model('Gedung_model')->save();
        $_SESSION['pesan'] = 'Data berhasil di update!!!';
        header('Location:' .BASEURL. '/Gedung/index');
    }

    public function delete($id) 
    {
        $this->model('Gedung_model')->delete($id);
        $_SESSION['pesan'] = 'Data berhasil di hapus!!!';
        header('Location:' .BASEURL. '/Gedung/index');
    }
        
}