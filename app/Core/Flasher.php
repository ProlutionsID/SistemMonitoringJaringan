<?php 

class Flasher {
	public static function setWaktu()
	{
		$_SESSION['waktu']=true;
	}
	public static function waktu()
	{
		if( isset($_SESSION['waktu'])){
			echo'
					<div align="center" class="alert alert-success" role="alert">
  					SISTEM INFORMASI BUKA PADA JAM 08:00 - 21:00
					</div>

			';
			unset($_SESSION['waktu']);
		}
	}
	public function setFlashLogin()
	{
		$_SESSION['login']=true;
	}
	public static function login()
	{
		if( isset($_SESSION['login'])){
			echo'
					<div align="center" class="alert alert-danger" role="alert">
  					Username atau Password salah
					</div>

			';
			unset($_SESSION['login']);
		}
	}
	public static function setFlashIdTari()
	{
		$_SESSION['IdTari']=true;
	}
	public function IdTari()
	{
		if( isset($_SESSION['IdTari'])){
			echo'
					<div align="center" class="alert alert-danger" role="alert">
  					Penyewaan sudah dilakukan !!
					</div>

			';
			unset($_SESSION['IdTari']);
		}
	}
	public static function setFlashNomorPegawai()
	{
		$_SESSION['NomorPegawai']=true;
	}
	public function NomorPegawai()
	{
		if( isset($_SESSION['NomorPegawai'])){
			echo'
					<div align="center" class="alert alert-danger" role="alert">
  					Maaf Nomor Pegawai sudah terdaftar
					</div>

			';
			unset($_SESSION['NomorPegawai']);
		}
	}
	public static function setFlash($pesan, $aksi, $tipe, $jenis)
	{
		$_SESSION['flash']=[
			'pesan'=> $pesan,
			'aksi'=> $aksi,
			'tipe'=> $tipe,
			'jenis'=> $jenis
		];
	}

	public static function flash()
	{
		if( isset($_SESSION['flash'])){
			echo'
					<div class="sufee-alert alert with-close alert-'.$_SESSION['flash']['tipe'].' alert-dismissible fade show">
                        Data '.$_SESSION['flash']['jenis'].' '.$_SESSION['flash']['pesan'].' di '.$_SESSION['flash']['aksi'].'
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
			';
			unset($_SESSION['flash']);
		}
	}

}
