<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kesekretariatan extends CI_Controller {

  public function index()
	{
    $data['title'] = 'Surat Masuk';
    
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('kesekretariatan/index', $data);
		$this->load->view('templates/footer');
	}

  public function surat_keluar()
	{
    $data['title'] = 'Surat Keluar';
    
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('kesekretariatan/surat_keluar', $data);
		$this->load->view('templates/footer');
	}

	public function buat_surat()
	{
    $data['title'] = 'Buat Surat';
    
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('kesekretariatan/buat_surat', $data);
		$this->load->view('templates/footer');
	}
}