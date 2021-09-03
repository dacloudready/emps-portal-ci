<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserAuthController extends BaseController
{
	public function index()
	{
		//
	}

	function verify()
	{
		$user = new UserModel();
		$emp_id = $this->request->getPost('emp_id');
		$found = $user->where('employee_id', $emp_id)->find();

		return $found = $found ? 'true' : 'false';
	}

}
