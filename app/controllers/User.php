<?php

class User extends Controller
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
        $data['page'] = 'User';
        $data['arr'] = $this->model('User_model')->select();
        if($id == FALSE){
            $data['judul'] = 'User';
            $this->view('admin/templates/header', $data);
            $this->view('admin/user/index', $data);
            $this->view('admin/templates/footer');
        }else{
            $data['judul'] = 'Add User';
            $this->view('admin/templates/header', $data);
            $this->view('admin/user/add', $data);
            $this->view('admin/templates/footer');
        }
    }
    
    public function add() 
    {
        $this->model('User_model')->add_user();
        $_SESSION['pesan'] = 'Data berhasil di tambah!!!';
        header('Location:' .BASEURL. '/User/index');
    }

    public function edit($id) 
    {
        $data['page'] = 'User';
        $data['judul'] = 'Edit User';
        $data['user'] = $this->model('User_model')->select($id);
        $this->view('admin/templates/header', $data);
        $this->view('admin/user/edit', $data);
        $this->view('admin/templates/footer');
    }

    public function save() 
    {
        $this->model('User_model')->save();
        $_SESSION['pesan'] = 'Data berhasil di update!!!';
        header('Location:' .BASEURL. '/User/index');
    }

    public function delete($id) 
    {
        $this->model('User_model')->delete($id);
        $_SESSION['pesan'] = 'Data berhasil di hapus!!!';
        header('Location:' .BASEURL. '/User/index');
    }
        
}