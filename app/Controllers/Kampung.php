<?php 
namespace App\Controllers;

use App\Models\M_kampung;

class Kampung extends BaseController
{
    protected $kampung;
    public function __construct()
    {
        $this->kampung = new M_kampung();
        $this->db = \Config\Database::connect();
    }

	public function index()
	{
        $query = $this->db->query("SELECT
            id_kamp,
            nama_kamp,
            kode_kampung,
            kode_dis,
            tb_kabupaten.kode_prov AS kode_prov,
            tb_kabupaten.kode_kab AS kode_kab
        FROM
            tb_kampung
        LEFT JOIN tb_distrik ON tb_kampung.id_dis = tb_distrik.id_dis
        LEFT JOIN tb_kabupaten ON tb_distrik.id_kab = tb_kabupaten.id_kab
        GROUP BY
            id_kamp");

        $data = [
            'title' => 'Kampung',
            'kampung' => $query->getResult()
        ];

		echo view('kampung/r-kampung', $data);
    }
	//--------------------------------------------------------------------
}