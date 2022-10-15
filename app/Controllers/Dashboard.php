<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        
        echo view('templates/header', $data);
        echo view('templates/sidebar', $data);
        echo view('dashboard/index', $data);
    		echo view('templates/footer');
    }
}