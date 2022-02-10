<?php 


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
			include  __DIR__ . "./../../Resources/Pages/{$this->request}.php";
			
		endif;

		

	}


}