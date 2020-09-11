<?php 

class Home extends Controller
{

	public function index()
	{
		if ( !isset($_SESSION['levelakses']) || 
		    ( isset($_SESSION['levelakses']) && $_SESSION['levelakses'] != 'Admin' ) ) {

		  header('Location:' .BASEURL. '/Login');
		  exit();
		} else {
			$data['page'] = 'Home';
			$data['judul'] = 'Home';
			$data['nama'] = $_SESSION['admin'];  
			$this->view('Admin/templates/header', $data);
			$this->view('Admin/Home/index', $data);
			$this->view('Admin/templates/footer');
		}
	}

	public function indexPenjual()
	{
		if ( !isset($_SESSION['levelakses']) || 
		    ( isset($_SESSION['levelakses']) && $_SESSION['levelakses'] != 'Penjual' ) ) {

		  header('Location:' .BASEURL. '/Login');
		  exit();
		} else {
			$data['page'] = 'Home';
			$data['judul'] = 'Home';
			$data['nama'] = $_SESSION['penjual'];  
			$this->view('Penjual/templates/header', $data);
			$this->view('Penjual/Home/index', $data);
			$this->view('Penjual/templates/footer');
		}
	}
}