<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * Photo class: ControlMain
 */

class Photo {
	use MainController;

	public function index()
	{
		$data['title'] = 'Photo';

		$this->view('photo', $data);
	}

}
