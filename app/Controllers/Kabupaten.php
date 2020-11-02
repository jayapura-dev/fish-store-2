<?php 
namespace App\Controllers;

use App\Models\M_kabupaten;

class Kabupaten extends BaseController
{
    protected $kabupaten;

    public function __construct()
    {
        $this->kabupaten = new M_kabupaten();
    }


	public function index()
	{
        $result = $this->kabupaten->findAll();
        $data = [
            'title' => 'Kabupaten',
            'kabupaten' => $result
        ];

		echo view('kabupaten/r-kabupaten', $data);
	}

	//--------------------------------------------------------------------
}