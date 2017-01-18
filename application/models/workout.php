<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class Workout extends CI_Model {
	function workoutinsert() {
    $data = array(
        'workout'=>trim($this->input->post('workout')),
        'description'=>trim($this->input->post('description'))
    );

    $this->db->insert('workouts',$data);
    return ($this->db->affected_rows() != 1) ? false : true;
	}

}
?>