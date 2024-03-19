<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class MobilModel extends Model
{
    protected $table = 'mobil';
     
    public function getMobil($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_mobil' => $id]);
        }   
    }
 
}