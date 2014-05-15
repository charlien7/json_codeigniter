<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Jsonci extends CI_CONTROLLER
{
	public function __construct()
	{
		parent::__construct();
		
	}


	public function index()
	{
		$this->load->model('jsonci_model');
	    $some_data = $this->jsonci_model->provincias();
	    $some_data = json_encode($some_data);

	    echo '<pre>'. print_r($some_data, 1).'</pre>'; exit();


	    $data = array (
	            'sodata' => $some_data
	    );

	    
	    $this->load->view('json_view', $data);

	}
}