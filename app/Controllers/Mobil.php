<?php
namespace App\Controllers;
//use CodeIgniter\Controller;
use App\Models\MobilModel;

class Mobil extends BaseController
{
    public function index()
    {
        $model = new MobilModel;
        $data['title']     = 'Data Mobil';
        $data['getMobil'] = $model->getMobil();
        echo view('header_view', $data);
        echo view('mobil_view', $data);
        echo view('footer_view', $data);
    }
}