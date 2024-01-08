<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * home class
 */
class Home
{
	use MainController;

	public function index()
	{
		// 1 step
		$data['title'] = "Home";

		$this->view('home',$data);
	}

}
