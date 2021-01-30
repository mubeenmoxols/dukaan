<?php
class MainModel extends CI_model
{
	public function getCategories(){
		$this->load->database();
		$data = $this->db->get("categories");

		return $data->result_array();
	}
}