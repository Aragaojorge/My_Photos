<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * {CLASSNAME} class: ControlMain
 */

class {CLASSNAME} {
	use MainController;

	public function index()
	{
		$data['title'] = '{CLASSNAME}';

		$this->view('{classname}', $data);
	}

}
