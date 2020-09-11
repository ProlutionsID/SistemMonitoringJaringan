<?php

class Perangkat extends Controller
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
        $data['page'] = 'Perangkat Jaringan';
        $data['arr'] = $this->model('Perangkat_model')->select();
        if($id == FALSE){
            $data['judul'] = 'Perangkat Jaringan';
            $this->view('admin/templates/header', $data);
            $this->view('admin/perangkat/index', $data);
            $this->view('admin/templates/footer');
        }else{
            $data['judul'] = 'Add Perangkat';
            $this->view('admin/templates/header', $data);
            $this->view('admin/perangkat/add', $data);
            $this->view('admin/templates/footer');
        }
    }

    public function add() 
    {
        $this->model('Perangkat_model')->add_perangkat();
        $_SESSION['pesan'] = 'Data berhasil di tambah!!!';
        header('Location:' .BASEURL. '/Perangkat/index');
    }

    public function edit($id) 
    {
        $data['page'] = 'Perangkat';
        $data['judul'] = 'Edit Perangkat';
        $data['perangkat'] = $this->model('Perangkat_model')->select($id);
        $this->view('admin/templates/header', $data);
        $this->view('admin/perangkat/edit', $data);
        $this->view('admin/templates/footer');
    }

    public function save() 
    {
        $this->model('Perangkat_model')->save();
        $_SESSION['pesan'] = 'Data berhasil di update!!!';
        header('Location:' .BASEURL. '/Perangkat/index');
    }

    public function delete($id) 
    {
        $this->model('Perangkat_model')->delete($id);
        $_SESSION['pesan'] = 'Data berhasil di hapus!!!';
        header('Location:' .BASEURL. '/Perangkat/index');
    }
        
}