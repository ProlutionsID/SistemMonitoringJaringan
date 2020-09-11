<?php 

class Home extends Controller
{

	public function index()
	{
		if ( !isset($_SESSION['status']) || 
		    ( isset($_SESSION['status']) && $_SESSION['status'] != 'Admin' ) ) {

		  header('Location:' .BASEURL. '/Login');
		  exit();
		} else {
			$data['page'] = 'Home';
			$data['judul'] = 'Home';
			$data['nama'] = $_SESSION['admin'];  
			$this->view('admin/templates/header', $data);
			$this->view('admin/home/index', $data);
			$this->view('admin/templates/footer');
		}
	}

}