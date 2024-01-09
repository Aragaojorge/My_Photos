<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * Upload class: ControlMain
 */

class Upload {
	use MainController;

	public function index()
	{

		$this->view('upload');
	}

}
