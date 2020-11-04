<?php namespace App\Models;

use CodeIgniter\Model;

class M_distrik extends Model {

    protected $table      = 'tb_distrik';
    protected $primaryKey = 'id_dis';

    function __construct(){
        $this->db = \Config\Database::connect();
    }

    function distrik_All(){

        $query = $this->db->query("SELECT * FROM tb_distrik
        LEFT JOIN tb_kabupaten ON tb_distrik.id_kab = tb_kabupaten.id_kab ");

        return $query->getResult();
    }

    function create_distrik($data){
        $save = $this->db->query("INSERT INTO tb_distrik ('id_kab', 'kode_dis', 'nama_dis')
        VALUES $data ");

        return $save;
    }
    
}