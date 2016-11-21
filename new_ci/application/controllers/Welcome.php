<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Auth_Controller {


	public function index()
	{
		$data['judul']		 ='HALAMAN DEPAN';

		$this->load_template('dashboard', $data);
	
	}
}
