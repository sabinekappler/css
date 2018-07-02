<?php

namespace App\Controller;

use App\Controller\AppController;

class BelboPagesController extends AppController {
	
	public function initialize()
	{
		parent::initialize();
		// Set layout
		$this->viewBuilder()->layout('belbo_navigation');
	}
	
	public function index()
	{
		
	}
	
	public function login()
	{
		
	}
	
}

?>

<!-- Pfad /src/Controller/BelboPagesController.php -->
