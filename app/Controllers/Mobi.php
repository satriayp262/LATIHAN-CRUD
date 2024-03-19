<?php
namespace App\Controllers;
//use CodeIgniter\Controller;
use App\Models\MobilModel;

class Barang extends BaseController
{
    public function index()
    {
        $model = new MobilModel;
        $data['title']     = 'Data Mobil';
        $data['getMobil'] = $model->getMobil();
        echo view('header_view', $data);
        echo view('barang_view', $data);
        echo view('footer_view', $data);
    }
}