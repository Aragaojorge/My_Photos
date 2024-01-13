<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

use \Model\Photo;
use \Model\Image;

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

		$photo = new Photo;

		$photo->limit = 12;

		$data['rows'] = $photo->findAll();

		$data['image'] = new Image;

		$this->view('home',$data);
	}

}
