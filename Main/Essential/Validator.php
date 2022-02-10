<?php 


class Validator 
{
	protected $request;

	public function Sanitize($request) {

		$this->request = $request;
		$this->request = filter_var($this->request, FILTER_SANITIZE_STRING);
		$this->request = trim($this->request);
		
		return $this->request;

	}


}