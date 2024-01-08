<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * {CLASSNAME} class: ControlMain
 */

class ControlMain {
	use MainController;

	public function index()
	{

		$this->view('{classname}');
	}

}
