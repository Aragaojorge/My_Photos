<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');
use \Model\Image;
use \Model\Photo;

/**
 * Photos class: ControlMain
 */

class Photos {
	use MainController;

	public function index()
	{

		$photo = new Photo;

		$photo->order_type = 'desc';

		$photo->limit = 24;

		$data['rows'] = $photo->findAll();

		$data['image'] = new Image;

		$this->view('photos', $data);
	}

}
