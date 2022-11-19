<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestCtrl extends CI_Controller {

	public function index()
	{
		print_r($this->guzzle('get','/api/AdvCtrl/'));
	}

}

/* End of file TestCtrl.php */
/* Location: ./application/controllers/TestCtrl.php */