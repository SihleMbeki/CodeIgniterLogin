<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function test($demo){

		$this->load->model('users_mode');
		$result=$this->users_mode->getUsers();
		$results="{";
		$jasonArray=array();
		foreach($result as $object){
			$results .="{\"id\":" .$object->id.",\"username\":\"".$object->username."\"},";
			$jasonArray[]=$object;
		}
		$results.="}";
		//echo $results;
		echo json_encode($jasonArray);
		//echo "{\"name\" : ".$result."}";
	}
}
