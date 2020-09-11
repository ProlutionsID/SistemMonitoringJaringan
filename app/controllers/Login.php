<?php 

class Login extends Controller 
{

	public function index()
	{
		$data['admin']='Login Admin';
		$this->view('login', $data);	
	}

	public function masuk(){

			if (isset($_POST['login'])) {
		  		if (!empty($_POST['username']) && !empty($_POST['password'])) {
		    		$username = $_POST['username'];
					$password = $_POST['password'];
					$query = $this->model('Login_model')->getUserById($username, $password);
					$status=$query['status'];
		    			if ($query>0) {
		    				if($password===$_POST['password'] && $status==='Admin'){
		    					$_SESSION['admin']=$username;
		    					$_SESSION['status'] = $status;
		    					header('Location:' .BASEURL. '/Home/index');
		    					exit;
		    				}
		    			}else{
		    				Flasher::setFlashLogin();
		    				header('Location:' .BASEURL. '/Login');
		    			} 				
				}else if(empty($_POST['username']) || empty($_POST['password'])){
					Flasher::setFlashLogin();
					header('Location:' .BASEURL. '/Login');
				}
			}
	}
	
}
