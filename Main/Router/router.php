<?php 


class Router 
{
	protected $request;
	protected $expected_url = array();
	
	public function __construct() {

		$this->expected_url = [
			'/',
			'dashboard'

		];

	}


	public function RouterRedirect($request) {

		$this->request = $request;


	}


}