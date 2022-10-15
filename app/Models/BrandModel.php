<?php

namespace App\Models;
use CodeIgniter\Model;

class BrandModel extends Model
{
    //model terhubung dengan database
    public function dataBeneran(){
    $db = \Config\Database::connect();
    $query = $db->query('select * from user');
    $result = $query->getResult();
    
    if (count($result)>0) 
    {
        return $result;
    } else {
        return false;
    }   
  }
}