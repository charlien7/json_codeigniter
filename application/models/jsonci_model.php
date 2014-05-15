<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Jsonci_model extends CI_MODEL
{

	public function __construct()
	{

		parent::__construct();

	}

	public function provincias()
	{

		return $this->db->get('provincia')->result();

	}

}
//end model