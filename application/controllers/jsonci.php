<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Jsonci extends CI_CONTROLLER
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('jsonci_model');
		$this->load->helper('url');
		$this->load->database('json');
		$this->config->set_item('base_url','http://localhost/json_codeigniter/') ;
	}

	/*public function index()
	{

		$data = array('titulo' => 'Titulo');
		$this->load->view('json_view',$data);

	}*/



public function index()
{
    $some_data = $this->jsonci_model->provincias();
    $some_data = json_encode($some_data);
    $data = array (
            'some_data' => $some_data
    );
        $this->load->view('json_view',$data);

}





	
}
//end controller