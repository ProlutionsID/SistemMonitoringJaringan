<?php

class Logout extends Controller 
{

	public function keluar()
	{
		if(isset($_SESSION["status"])){
			unset($_SESSION["status"]);
			header('Location:' .BASEURL. '/Login');
			exit;
		}
	}

}