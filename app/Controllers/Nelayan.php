<?php 
namespace App\Controllers;

use App\Models\M_nelayan;

class Nelayan extends BaseController
{
    protected $nelayan;
    public function __construct()
    {
        $this->nelayan = new M_nelayan(); // Entity Model
        $this->db = \Config\Database::connect(); //Manual Entity for Relation Table View
    }

	public function index()
	{
        $query = $this->db->query("SELECT * FROM v_nelayan ");

        $data = [
            'title' => 'Kampung',
            'nelayan' => $query->getResult()
        ];

		return view('nelayan/r-nelayan', $data);
    }
	//--------------------------------------------------------------------
}