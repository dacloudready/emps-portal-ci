<?php

namespace App\Controllers;

use App\Models\Timelog;
use App\Models\UserSession;


class Home extends BaseController
{
	private $timelog;

	function __construct()
	{
		$this->timelog = new Timelog();
		$this->session = new UserSession();
	
	}


	function index()
	{
		//limit to 10 records starting from 10th record
		$data['logs'] = $this->timelog->where('employee_id', '0722')->findAll('4', '10'); 
		return view('layout/main', $data);
	}

	function login()
	{
		return view('layout/login');
	}


	




}
