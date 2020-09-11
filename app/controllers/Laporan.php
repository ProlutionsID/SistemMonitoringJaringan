<?php

class Laporan extends Controller
{

    public function __construct() {
        if ( !isset($_SESSION['status']) || 
            ( isset($_SESSION['status']) && $_SESSION['status'] != 'Admin' ) ) {

          header('Location:' .BASEURL. '/Login');
          exit();
        }
    }

    public function index() 
    {
        $data['page'] = 'Laporan';
        $data['judul'] = 'Laporan';
        $data['arr'] = $this->model('Laporan_model')->select();
        $data['traffic'] = $this->model('Laporan_model')->traffic();
    
        $this->view('admin/templates/header', $data);
        $this->view('admin/laporan/index', $data);
        $this->view('admin/templates/footer');
    
    }
        
}