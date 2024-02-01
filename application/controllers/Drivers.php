<?php
/*
-- ---------------------------------------------------------------
-- TAJALAPAK MARKETPLACE PRO MULTI BUYER MULTI SELLER + SUPPORT RESELLER SYSTEM
-- CREATED BY : ROBBY PRIHANDAYA (0812-6777-1344)
-- COPYRIGHT  : Copyright (c) 2018 - 2021, PHPMU.COM. (https://phpmu.com/)
-- LICENSE    : Commercial Software, (Hanya untuk 1 domain)
-- CREATED ON : 2019-03-26
-- UPDATED ON : 2021-02-09
-- ---------------------------------------------------------------
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Drivers extends CI_Controller {

	function login () {
		

	}

	function index(){

		//echo "hello world";
		$this->load->view('drivers/view_login');

    } 

	function hello($nama=null,$alamat=null, $tlp=null){		
    echo "Nama saya: {$nama}<br>";
    echo "Alamat saya: {$alamat}<br>";
    echo "Nomor telepon saya: {$tlp}";
}

function process(){
	echo "ada";
}


	function world(){
		echo "hello world";
	}

}



	

	// application/controllers/Login.php

// defined('BASEPATH') OR exit('No direct script access allowed');

// class Login extends CI_Controller {
//     public function index() {
//         $this->load->view('view_login');
//     }

    // application/controllers/Drivers.php

	// defined('BASEPATH') OR exit ('No direct script access allowed');

	// class Drivers extends CI_Controller {
	// 	public function index(){
	// 		//mendapatkan path
	// 		$driverFolder = APPATH. 'drivers/';
		
	// 	// check jika folder ada
	// 	if(is_dir($driverFolder)){
	// 		//mendapatkan daftar files didalam drivers folder
	// 		$files = glob($driversFolder. '*');

	// 	    // melewati dafrar dari files to view
	// 		$data['files'] = $files;

	// 		// Load login view dengan "drivers" files
	// 		$this->load->view('view_login',$data);
	// 	} else {
	// 		echo 'The "drivers" folder does not exist.';
	// 	}
	// 	}
	// }

	
/*
-- ---------------------------------------------------------------
-- TAJALAPAK MARKETPLACE PRO MULTI BUYER MULTI SELLER + SUPPORT RESELLER SYSTEM
-- CREATED BY : ROBBY PRIHANDAYA (0812-6777-1344)
-- COPYRIGHT  : Copyright (c) 2018 - 2021, PHPMU.COM. (https://phpmu.com/)
-- LICENSE    : Commercial Software, (Hanya untuk 1 domain)
-- CREATED ON : 2019-03-26
-- UPDATED ON : 2021-02-09
-- ---------------------------------------------------------------
*/
