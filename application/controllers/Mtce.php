<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mtce extends Application
{

	public function index()
	{
		$this->data['content'] = 'Coming soon to a sctreen near you!';
		$this->render(); 
	}

}
