<?php

class Certmodel extends CI_Model
{
	
	function insert($data)
	{
		$query = $this->db->insert("student",$data);
		return $query;
		if($query)
		{

			return true;
		}
		else
		{
			return false;
		}
	}
	function login($username, $password)
	{
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$query = $this->db->get('admin');
			if($query->num_rows() > 0)
			{
				return $query->row();
			}
			else
			{
				return false;
			}







	// 	$query = $this->db->select('username','password')->get('admin')->where(array('username'=>$username, 'password'=> $password));
	// 	return $query;
	// 	if($query)
	// 	{
	// 		return true;
	// 	}
	// 	else
	// 	{
	// 		return false;
	// 	}
	}

	// function student_list()
	// {
	// 	$studentdata = $this->db->get('student');
	// 	return $studentdata->result();
	// }

	function save_student($d)
	{
		// $data = array(
		// 		'rollno' 	=> $this->input->post('rollno'), 
		// 		'name' 	=> $this->input->post('name'), 
		// 		'email' => $this->input->post('email'), 
		// 		'dob'   => $this->input->post('dob'),
		// 		'username' => $this->input->post('username'),
		// 		'password' => $this->input->post('password')
		// 	);
		$data=$this->db->insert('student',$d);
		//return $data;
	}

	function get_student()
	{
		$query = $this->db->get('student')->result();
		// if($query->num_rows() > 0)
		// {
		// 	return $query->result();
		// }
		// else
		// {
		// 	return false;
		// }
		return $query;
	}

	function get_Studentid($id)
	{
		$this->db->where('id',$id);
		return $user = $this->db->get('student')->row_array();
	}

	function update_student($userid,$d)
	{
		$this->db->where('id',$userid);
		$q = $this->db->update('student',$d);
		return $q;
	}

	function delete_student($id)
	{
		$this->db->where('id',$id);
		$q = $this->db->delete('student');
		return $q;
	}

	function add_data($table, $data)
	{
		$q=$this->db->insert($table,$data);
		return $q;
	}

	function get_Student_doc_info($id)
	{
		$q = $this->db->query('SELECT rollno, name, marksheet, lc, seven, caste, caste, nonc, sports, scout, freedom, krushi, farmer, father, income, hand, break, project, other FROM document WHERE id='.$id);
		return $s = $q->row();
		// $this->db->where('rollno',$rollno);
		// return $user = $this->db->get('document')->row_array();
	}

	function add_lc_info($data)
	{
		$q = $this->db->insert('lc',$data);
		return $q;
	}

	function view_student_lc($id)
	{
		$q = $this->db->query('SELECT * FROM lc WHERE id='.$id);
		return $q->row();
	}

	function delete_doc_info($id)
	{
		$this->db->where('id',$id);
		$q = $this->db->delete('document');
	}

	function get_document_id($id)
	{
		$this->db->where('id',$id);
		return $user = $this->db->get('document')->row_array();
	}

	function update_document($userid,$d)
	{
		$this->db->where('id',$userid);
		$q = $this->db->update('document',$d);
		return $q;
	}

	function get_lc_id($id)
	{
		$this->db->where('id',$id);
		return $user = $this->db->get('lc')->row_array();
	}

	function update_lc($userid,$d)
	{
		$this->db->where('id',$userid);
		$q = $this->db->update('lc',$d);
		return $q;
	}

	function delete_lc_info($id)
	{
		$this->db->where('id',$id);
		$q = $this->db->delete('lc');
	}

	function get_student_info($id)
	{
		$q = $this->db->query('SELECT * FROM student WHERE id='.$id);
		return $q->row();
	}

}


?>