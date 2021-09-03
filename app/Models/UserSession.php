<?php

namespace App\Models;

use CodeIgniter\Model;



class UserSession extends Model
{
	
	private $session;
	private $user_name;
	private $user_email;
	
	private $userid;
	private $authid;

	function __construct()
	{
		parent::__construct();
		$this->session =\Config\Services::session();
	}

	function init()
	{
		$this->user_name = 'johndoe';
		$this->user_email = 'johndoe@gmail.com';

		$userdata = [
			'username'  => $this->user_name,
			'email'     => $this->user_email,
		   'logged_in' => 'true'
		];
   
	   return $this->session->set($userdata);
	}

	function user()
	{
		//session username
		return $this->session->get('username');
	}

	function logged_in()
	{
		if($this->session->has('logged_in'))
		{
			return true;
		}else{
			return false;
		}
	}

	function clear()
	{
		// session_destroy
		return $this->session->destroy();
	}

	function started()
	{
		if($this->logged_in())
		{
			return true;
		}else
		{
			return false;
		}
	}

	
}
