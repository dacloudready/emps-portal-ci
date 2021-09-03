<?php

namespace App\Controllers;

use App\Models\Timelog;
use App\Models\UserSession;
use App\Models\UserModel;

class PageController extends BaseController
{
	private $timelog;
	private $session;

	function __construct()
	{
		$this->session = \Config\Services::session();
		$this->timelog = new Timelog();
		$this->user = new UserModel();
	}


	function index()
	{
		if($this->session->has('logged_in')) {
			return redirect()->to('dashboard');
		}else{
			return redirect()->to('login');
		}
		
	}

	function dashboard()
	{
		if($this->session->has('logged_in')) 
		{
			//limit to 10 records starting from 10th record
			$userid = $this->session->get('user_id');
			$data['user'] = $this->user->find($userid);
			$data['logs'] = $this->timelog->where('employee_id', '0722')->findAll(); 
			return view('layout/main', $data);

		}else{
			return redirect()->to('login');
		}
		
		//return $userid;
	}
	

	function login()
	{
		if($this->session->has('logged_in')) 
		{
			return redirect()->to('dashboard');
		}
		else{
			if ($this->request->getPost('emp_id') != null)
			{
				try {
					$empid = $this->request->getPost('emp_id');
					$userdata = $this->user->where('employee_id', $empid)->findAll();
					if(!empty($userdata))
					{
						$auth_data = [
							'employee_id'	=> $userdata[0]['employee_id'],
							'user_id'	=> $userdata[0]['id'],
							'token'	=>	'',
							'logged_in' => TRUE
						];
						$this->session->set($auth_data);
						return redirect()->to('dashboard');
					}
				} catch (\Throwable $th) {
					die( $th->getMessage() );
				}
			}
			else
			{
				return  view('layout/login');
			}
		}
	}

	function logout()
	{
		$this->session->destroy();
		return redirect()->to('/');
	}


	




}
