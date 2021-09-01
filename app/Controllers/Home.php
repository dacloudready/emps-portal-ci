<?php

namespace App\Controllers;

use App\Models\Timelog;

class Home extends BaseController
{
	private $timelog;

	function __construct(){
		$this->timelog = new Timelog();
	}

	public function index()
	{
		$data['logs'] = $this->timelog->findAll('100'); 
		return view('main', $data);
	}


}
