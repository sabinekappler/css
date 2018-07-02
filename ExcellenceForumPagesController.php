<?php

namespace App\Controller;

use App\Controller\AppController;

class ExcellenceForumPagesController extends AppController {
	
	public function initialize()
	{
		parent::initialize();
		// Set layout
		$this->viewBuilder()->layout('excellence_forum_navigation');
	}
	
	public function index()
	{
		
	}
	
}

?>