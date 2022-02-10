<?php 
require_once __DIR__ . "./../Essential/Constants.php";

class Router 
{
	protected $request;
	protected $expected_url = array();
	
	public function __construct() {

		$this->expected_url = [
			'index',
			'dashboard'
		];

		return $this->expected_url;

	}


	public function RouterRedirect($request) {

		 $this->request = $request;
		 $this->request = str_replace("/moscovium/", "", $this->request);
		($this->request == "/" ? $this->request = "index" : $this->request = $this->request);
		($this->request == ""  ? $this->request = "index" : $this->request = $this->request);

		if (in_array($this->request, $this->expected_url)): 
			include  __VIEW__ . "{$this->request}.php";
		else:
			include  __VIEW__ . "404.php";
		endif;

	

	}


}