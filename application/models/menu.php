<?php
/**
 * Created by PhpStorm.
 * User: maneesha
 * Date: 12/15/2017
 * Time: 9:16 AM
 */

class menu extends CI_Model {
	public function getBreakfast(){
		$this->db->select('*');
		$this->db->from('menu');
		$this->db->where('mainCourse','breakfast');
		$query1 = $this->db->get();

		return  $query1->result_array(); //returns the result as an array
	}

	public function getLunch(){
		$this->db->select('*');
		$this->db->from('menu');
		$this->db->where('mainCourse','lunch');
		$query1 = $this->db->get();

		return $query1->result_array(); //returns the result as an array

	}

	public function getEvening() {
		$this->db->select( '*' );
		$this->db->from( 'menu' );
		$this->db->where( 'mainCourse', 'evening' );
		$query1 = $this->db->get();

		return $query1->result_array(); //returns the result as an array

	}


	public function getShorteats() {
		$this->db->select( '*' );
		$this->db->from( 'menu' );
		$this->db->where( 'mainCourse', 'shorteats' );
		$query1 = $this->db->get();

		return $query1->result_array(); //returns the result as an array
	}

	public function getBeverages() {
		$this->db->select( '*' );
		$this->db->from( 'menu' );
		$this->db->where( 'mainCourse', 'beverages' );
		$query1 = $this->db->get();


		return $query1->result_array(); //returns the result as an array
	}

}