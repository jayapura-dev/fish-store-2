<?php 
namespace App\Controllers;

use App\Models\M_distrik;

class Distrik extends BaseController
{
    protected $distrik;
    public function __construct()
    {
        $this->distrik = new M_distrik();
    }

	public function index()
	{
        $result = $this->distrik->distrik_all();

        $data = [
            'title' => 'Distrik',
            'distrik' => $result
        ];

		echo view('distrik/r-distrik', $data);
	}

	//--------------------------------------------------------------------
}