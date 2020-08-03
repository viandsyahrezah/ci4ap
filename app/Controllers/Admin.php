<?php namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		$data= [
					'title' => 'Home',
					'title_content' => 'Halaman Home',
					'isi' => 'admin/v_dashboard',
		];
		echo view('admin/layout/v_template', $data);
	}


	public function data_penagihan()
	{
		$data= [
					'title' => 'Home',
					'title_content' => 'Halaman Penagihan',
					'isi' => 'admin/v_data_penagihan',
		];
		echo view('admin/layout/v_template', $data);
	}

	//--------------------------------------------------------------------

}
