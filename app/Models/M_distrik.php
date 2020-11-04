<?php namespace App\Models;

use CodeIgniter\Model;

class M_distrik extends Model {

    function __construct(){
        $this->db = \Config\Database::connect();
    }

    function distrik_All(){

        $query = $this->db->query("SELECT * FROM tb_distrik
        LEFT JOIN tb_kabupaten ON tb_distrik.id_kab = tb_kabupaten.id_kab ");

        return $query->getResult();
    }
}