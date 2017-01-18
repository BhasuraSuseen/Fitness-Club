<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Workoutassign extends CI_Controller {
	
	public function index()
	{	
		$this->load->helper('url');
		$this->load->view('schedules');
		
		$this->load->model('Workout');
	$this->Workout->workoutinsert();
	    

	}
	public function workoutinsert(){
 	
	
	 }

	 

}
?>