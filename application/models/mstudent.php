<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mstudent extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function findAll()
	{
		return $this->db->get('data')->result();
	}

	public function add($name, $address, $gender, $year, $extra)
	{
		$this->db->set('name', $name);
		$this->db->set('address', $address);
        $this->db->set('gender' , $gender);
		$this->db->set('year', $year);
		$extra = implode(',', $extra);
		$this->db->set('extra', $extra);
		$this->db->insert('data');
	}

	public function edit($id, $name, $address, $gender, $year, $extra)
	{

		$this->db->set('name', $name);
		$this->db->set('address', $address);
		$this->db->set('gender', $gender);
		$this->db->set('year', $year);
		$extra = implode(',', $extra);
		$this->db->set('extra', $extra);
		$this->db->where('id' ,$id);
		$this->db->update('data');
	}

	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('data');
	}

	public function find($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('data')->row();
	}
}