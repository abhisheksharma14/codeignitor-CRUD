<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Student extends CI_Controller{

	function __construct()
    {
        // this is your constructor
        parent::__construct();
        // $this->load->helper('form');
        $this->load->helper('add');
    }

	public function index()
	{
		$data['liststudent']=$this->mstudent->findAll();
		$this->load->view('index',$data);
	}

	public function add()
	{
		
		$this->load->view('add');
		$this->load->helper('add');
	}

	public function processadd()
	{
		
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$gender = $this->input->post('gender');
		$year = $this->input->post('year');	
		$extra = $this->input->post('extra');
		$this-> mstudent->add($name, $address, $gender, $year, $extra);
		return redirect('student');
	}

	public function processedit()
	{

		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$gender = $this->input->post('gender');
		$year = $this->input->post('year');
		$extra = $this->input->post('extra');
		$this-> mstudent->edit($id,$name, $address, $gender, $year, $extra);
		return redirect('student');
	}

	public function delete($id)
	{
		$this-> mstudent->delete($id);
		return redirect('student');
	}

	public function edit($id)
	{
		$data['sd'] = $this-> mstudent->find($id);
		$this->load->view('edit', $data);
	}
}