<?php

namespace App\Controllers;

use \Codeigniter\Controller; use App\Models\BrandModel; 

class Kesekretariatan extends BaseController

  public function index()
	{
    $data['title'] = 'Surat Masuk';
    $brandmdl = new BrandModel(); 
    $data['brand'] = $brandmdl->dataBeneran();
    
    echo view('templates/header', $data);
    echo view('templates/sidebar', $data);
    echo view('kesekretariatan/index', $data);
		echo view('templates/footer');
	}

  public function surat_keluar()
	{
    $data['title'] = 'Surat Keluar';
    
    echo view('templates/header', $data);
    echo view('templates/sidebar', $data);
    echo view('kesekretariatan/surat_keluar', $data);
		echo view('templates/footer');
	}

	public function buat_surat()
	{
    $data['title'] = 'Buat Surat';
    
    echo view('templates/header', $data);
    echo view('templates/sidebar', $data);
    echo view('kesekretariatan/buat_surat', $data);
		echo view('templates/footer');
	}
}