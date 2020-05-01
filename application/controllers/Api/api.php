<?php

class Api extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
   		date_default_timezone_set('Asia/Calcutta');
	}

	public function login()
	{
		$username = $_POST['username'];
		$password = base64_encode($_POST['password']);
		$d = array(
							'username' => $username,
							'password' => $password
					 );
		$query = $this->db->get_where('admin',$d);
		if($query->num_rows() > 0)
		{
			$d['status'] = '200';
			$d['msg'] = "Success";
		}
		else
		{
			$d['status'] = '404';
			$d['msg'] = 'No Data Found';
		}
		echo json_encode($d);
	}
	public function basic_std_info()//this can also be used for export student data
	{
		$query = $this->db->get('student');
		if($query->num_rows() > 0)
		{
			$d['status']='200';
			$d['msg']='success';
			foreach ($query->result() as $row)
			{
				$d['data'][] = array(
										'id' => $row->id,
										'rollno' => $row->rollno,
										'regno' => $row->regno,
										'name' => $row->name,
										'dob' => $row->dob,
										'gender' => $row->gender,
										'address' => $row->address,
										'contact' => $row->contact,
										'created_at' => $row->created_at,
										'updated_at' => $row->updated_at
									);
			}
		}
		else
		{
			$d['data']="";
			$d['status']='404';
			$d['msg']='Data Not Found';
		}
		echo json_encode($d);
	}
	public function add_std_basic_info()
	{
		$d = array();
		$error = array();
		$d['rollno'] = $_POST['rollno'];
		$d['regno'] = $_POST['regno'];
		$d['name'] = $_POST['name'];
		$d['dob'] = $_POST['dob'];
		$d['gender'] = $_POST['gender'];
		$d['address'] = $_POST['address'];
		$d['contact'] = $_POST['contact'];
		if(!empty($d['name']) && !empty($d['dob']) && !empty($d['gender']) && !empty($d['address']) && !empty($d['contact']))
		{
			$query = $this->db->insert('student',$d);
		}
		else
		{
			$error['status']='400';
			$error['msg'] = 'Please fill all credentials';
			echo json_encode($error);
			exit();	
		}
		if($query)
		{
			$d['status'] = '200';
			$d['msg'] = 'Student has been added Successfully';
		}
		else
		{
			$error['status'] = '400';
			$error['msg'] = 'Failed to add Student';
		}
		echo json_encode($d);
	}
	public function edit_std_basic_info()
	{
		$d = array();
		$error = array();
		$id = $_POST['id'];

		$d['rollno'] = $_POST['rollno'];
		$d['regno'] = $_POST['regno'];
		$d['name'] = $_POST['name'];
		$d['dob'] = $_POST['dob'];
		$d['gender'] = $_POST['gender'];
		$d['address'] = $_POST['address'];
		$d['contact'] = $_POST['contact'];
		$date = date('Y-m-d');
        $time = date('h:i:s');
        $updated_at = $date." ".$time;
        $d['updated_at'] = $updated_at;

		if(!empty('id') && !empty($d['name']) && !empty($d['dob'])&& !empty($d['gender'])&& !empty($d['address'])&& !empty($d['contact']))
		{
			$query = $this->db->where('id',$id)->update('student',$d);
		}
		else
		{
			$error['status']='400';
			$error['msg'] = 'Please fill all credentials';
			echo json_encode($error);
			exit();
		}
		if($query)
		{
			$d['status']='200';
			$d['msg']='Student Updated Successfully';
		}
		else
		{
			$d['status']='400';
			$d['msg']='Failed to Update Student';
		}
		echo json_encode($d);
	}

	public function delete_std_basic_info($id)
	{
		error_reporting(0);
		$d = array();
		$error = array();
		$db_id = $this->db->select('id')->get_where('student',array('id'=>$id));
		// echo $db_id->row()->id;
		if($db_id->row()->id)
		{
			$query = $this->db->delete('student',array('id' => $id));
			if($query)
			{
				$d['status']='200';
				$d['msg']='Student Deleted Successfully';
			}
			else
			{
				$error['status']='400';
				$error['msg']='Failed to Delete Student';
				echo json_encode($error);
				exit();
			}
		}
		else
		{
			$error['msg']="Id not found";
			echo json_encode($error);
			exit();
		}
		echo json_encode($d);
	}
	public function view_std_basic_info($id)
	{
		error_reporting(0);
		$d = array();
		$error = array();
		$db_id = $this->db->select('id')->get_where('student',array('id'=>$id));
		if($db_id->row()->id)
		{
			$info = $this->db->get_where('student', array('id'=>$id));
			$d['id'] = $info->row()->id;
			$d['rollno'] = $info->row()->rollno;
			$d['regno'] = $info->row()->regno;
			$d['name'] = $info->row()->name;
			$d['dob'] = $info->row()->dob;
			$d['gender'] = $info->row()->gender;
			$d['address'] = $info->row()->address;
			$d['contact'] = $info->row()->contact;
			$d['created_at'] = $info->row()->created_at;
			$d['updated_at'] = $info->row()->updated_at;
		}
		else
		{
			$error['msg']="Id not found";
			echo json_encode($error);
			exit();
		}
		echo json_encode($d);
	}
	public function view_std_docs($id)
	{
		$d = array();
		$error = array();
		$db_id = $this->db->select('id')->get_where('document',array('id'=>$id));
		if($db_id->row()->id)
		{
			$info = $this->db->get_where('document', array('id'=>$id));
			$d['id'] = $info->row()->id;
			$d['rollno'] = $info->row()->rollno;
			$d['name'] = $info->row()->name;
			$d['regno'] = $info->row()->regno;
			$d['marksheet'] = $info->row()->marksheet;
			$d['lc'] = $info->row()->lc;
			$d['seven'] = $info->row()->seven;
			$d['caste'] = $info->row()->caste;
			$d['nonc'] = $info->row()->nonc;
			$d['sports'] = $info->row()->sports;
			$d['scout'] = $info->row()->scout;
			$d['freedom'] = $info->row()->freedom;
			$d['krushi'] = $info->row()->krushi;
			$d['farmer'] = $info->row()->farmer;
			$d['father'] = $info->row()->father;
			$d['income'] = $info->row()->income;
			$d['hand'] = $info->row()->hand;
			$d['break'] = $info->row()->break;
			$d['project'] = $info->row()->project;
			$d['other'] = $info->row()->other;
			$d['created_at'] = $info->row()->created_at;
			$d['updated_at'] = $info->row()->updated_at;
		}
		else
		{
			$error['msg']="Id not found";
			echo json_encode($error);
			exit();
		}
		echo json_encode($d);
	}
	public function add_std_docs()
	{
		$d = array();
		$error = array();
		$d['rollno'] = $_POST['rollno'];
		$d['name'] = $_POST['name'];
		$d['regno'] = $_POST['regno'];
		$d['marksheet'] = $_POST['marksheet'];
		$d['lc'] = $_POST['lc'];
		$d['seven'] = $_POST['seven'];
		$d['caste'] = $_POST['caste'];
		$d['nonc'] = $_POST['nonc'];
		$d['sports'] = $_POST['sports'];
		$d['scout'] = $_POST['scout'];
		$d['freedom'] = $_POST['freedom'];
		$d['krushi'] = $_POST['krushi'];
		$d['farmer'] = $_POST['farmer'];
		$d['father'] = $_POST['father'];
		$d['income'] = $_POST['income'];
		$d['hand'] = $_POST['hand'];
		$d['break'] = $_POST['break'];
		$d['project'] = $_POST['project'];
		$d['other'] = $_POST['other'];
		if(!empty($d['rollno']) && !empty($d['name']) && !empty($d['regno']) && !empty($d['marksheet']) && !empty($d['lc']) && !empty($d['seven']) && !empty($d['caste']) && !empty($d['nonc']) && !empty($d['sports']) && !empty($d['scout']) && !empty($d['freedom']) && !empty($d['krushi']) && !empty($d['farmer']) && !empty($d['father']) && !empty($d['income']) && !empty($d['hand']) && !empty($d['break']) && !empty($d['project']) && !empty($d['other']))
		{
			$query = $this->db->insert('document',$d);
		}
		else
		{
			$error['status']='400';
			$error['msg'] = 'Please fill all credentials';
			echo json_encode($error);
			exit();
		}
		if($query)
		{
			$d['status'] = '200';
			$d['msg'] = 'Document has been added Successfully';
		}
		else
		{
			$error['status'] = '400';
			$error['msg'] = 'Failed to add Document';
		}
		echo json_encode($d);
	}
	public function edit_std_docs()
	{
		$d = array();
		$error = array();
		$id = $_POST['id'];

		$d['rollno'] = $_POST['rollno'];
		$d['name'] = $_POST['name'];
		$d['regno'] = $_POST['regno'];
		$d['marksheet'] = $_POST['marksheet'];
		$d['lc'] = $_POST['lc'];
		$d['seven'] = $_POST['seven'];
		$d['caste'] = $_POST['caste'];
		$d['nonc'] = $_POST['nonc'];
		$d['sports'] = $_POST['sports'];
		$d['scout'] = $_POST['scout'];
		$d['freedom'] = $_POST['freedom'];
		$d['krushi'] = $_POST['krushi'];
		$d['farmer'] = $_POST['farmer'];
		$d['father'] = $_POST['father'];
		$d['income'] = $_POST['income'];
		$d['hand'] = $_POST['hand'];
		$d['break'] = $_POST['break'];
		$d['project'] = $_POST['project'];
		$d['other'] = $_POST['other'];
		$date = date('Y-m-d');
        $time = date('h:i:s');
        $updated_at = $date." ".$time;
        $d['updated_at'] = $updated_at;

		if(!empty($id) && !empty($d['rollno']) && !empty($d['name']) && !empty($d['regno']) && !empty($d['marksheet']) && !empty($d['lc']) && !empty($d['seven']) && !empty($d['caste']) && !empty($d['nonc']) && !empty($d['sports']) && !empty($d['scout']) && !empty($d['freedom']) && !empty($d['krushi']) && !empty($d['farmer']) && !empty($d['father']) && !empty($d['income']) && !empty($d['hand']) && !empty($d['break']) && !empty($d['project']) && !empty($d['other']))
		{
			$query = $this->db->where('id',$id)->update('document',$d);
		}
		else
		{
			$error['status']='400';
			$error['msg'] = 'Please fill all credentials';
			echo json_encode($error);
			exit();
		}
		if($query)
		{
			$d['status']='200';
			$d['msg']='Document Updated Successfully';
		}
		else
		{
			$d['status']='400';
			$d['msg']='Failed to Update Document';
		}
		echo json_encode($d);
	}
	public function delete_std_docs($id)
	{
		error_reporting(0);
		$d = array();
		$error = array();
		$db_id = $this->db->select('id')->get_where('document',array('id'=>$id));
		// echo $db_id->row()->id;
		if($db_id->row()->id)
		{
			$query = $this->db->delete('document',array('id' => $id));
			if($query)
			{
				$d['status']='200';
				$d['msg']='Document Deleted Successfully';
			}
			else
			{
				$error['status']='400';
				$error['msg']='Failed to Delete Document';
				echo json_encode($error);
				exit();
			}
		}
		else
		{
			$error['msg']="Id not found";
			echo json_encode($error);
			exit();
		}
		echo json_encode($d);
	}
	public function view_std_lc($id)
	{
		$d = array();
		$error = array();
		$db_id = $this->db->select('id')->get_where('lc',array('id'=>$id));
		if($db_id->row()->id)
		{
			$info = $this->db->get_where('lc', array('id'=>$id));
			$d['id'] = $info->row()->id;
			$d['rollno'] = $info->row()->rollno;
			$d['sr'] = $info->row()->sr;
			$d['regno'] = $info->row()->regno;
			$d['name'] = $info->row()->name;
			$d['mother'] = $info->row()->mother;
			$d['religion'] = $info->row()->religion;
			$d['birthplace'] = $info->row()->birthplace;
			$d['dob'] = $info->row()->dob;
			$d['dobwords'] = $info->row()->dobwords;
			$d['preschool'] = $info->row()->preschool;
			$d['joindate'] = $info->row()->joindate;
			$d['progress'] = $info->row()->progress;
			$d['behave'] = $info->row()->behave;
			$d['leavedate'] = $info->row()->leavedate;
			$d['year'] = $info->row()->year;
			$d['fromdate'] = $info->row()->fromdate;
			$d['from_year'] = $info->row()->from_year;
			$d['reason'] = $info->row()->reason;
			$d['remarks'] = $info->row()->remarks;
			$d['created_at'] = $info->row()->created_at;
			$d['updated_at'] = $info->row()->updated_at;
		}
		else
		{
			$error['msg']="Id not found";
			echo json_encode($error);
			exit();
		}
		echo json_encode($d);
	}
	public function add_std_lc()
	{
		$d = array();
		$error = array();
		$d['rollno'] = $_POST['rollno'];
		$d['sr'] = $_POST['sr'];
		$d['regno'] = $_POST['regno'];
		$d['name'] = $_POST['name'];
		$d['mother'] = $_POST['mother'];
		$d['religion'] = $_POST['religion'];
		$d['birthplace'] = $_POST['birthplace'];
		$d['dob'] = $_POST['dob'];
		$d['dobwords'] = $_POST['dobwords'];
		$d['preschool'] = $_POST['preschool'];
		$d['joindate'] = $_POST['joindate'];
		$d['progress'] = $_POST['progress'];
		$d['behave'] = $_POST['behave'];
		$d['leavedate'] = $_POST['leavedate'];
		$d['year'] = $_POST['year'];
		$d['fromdate'] = $_POST['fromdate'];
		$d['from_year'] = $_POST['from_year'];
		$d['reason'] = $_POST['reason'];
		$d['remarks'] = $_POST['remarks'];

		if(!empty($d['rollno']) && !empty($d['sr']) && !empty($d['name']) && !empty($d['regno']) && !empty($d['mother']) && !empty($d['religion']) && !empty($d['birthplace']) && !empty($d['dob']) && !empty($d['dobwords']) && !empty($d['preschool']) && !empty($d['joindate']) && !empty($d['progress']) && !empty($d['behave']) && !empty($d['leavedate']) && !empty($d['year']) && !empty($d['fromdate']) && !empty($d['from_year']) && !empty($d['reason']) && !empty($d['remarks']))
		{
			$query = $this->db->insert('lc',$d);
		}
		else
		{
			$error['status']='400';
			$error['msg'] = 'Please fill all credentials';
			echo json_encode($error);
			exit();
		}
		if($query)
		{
			$d['status'] = '200';
			$d['msg'] = 'L.C. has been added Successfully';
		}
		else
		{
			$error['status'] = '400';
			$error['msg'] = 'Failed to add L.C.';
		}
		echo json_encode($d);
	}
	public function edit_std_lc()
	{
		$d = array();
		$error = array();
		$id = $_POST['id'];

		$d['rollno'] = $_POST['rollno'];
		$d['sr'] = $_POST['sr'];
		$d['regno'] = $_POST['regno'];
		$d['name'] = $_POST['name'];
		$d['mother'] = $_POST['mother'];
		$d['religion'] = $_POST['religion'];
		$d['birthplace'] = $_POST['birthplace'];
		$d['dob'] = $_POST['dob'];
		$d['dobwords'] = $_POST['dobwords'];
		$d['preschool'] = $_POST['preschool'];
		$d['joindate'] = $_POST['joindate'];
		$d['progress'] = $_POST['progress'];
		$d['behave'] = $_POST['behave'];
		$d['leavedate'] = $_POST['leavedate'];
		$d['year'] = $_POST['year'];

		$year = $_POST['year'];
    	$fromdate = $_POST['fromdate'];
    	$from_year = $year.",".$fromdate;

		$d['fromdate'] = $_POST['fromdate'];
		$d['from_year'] = $from_year;
		$d['reason'] = $_POST['reason'];
		$d['remarks'] = $_POST['remarks'];
		$date = date('Y-m-d');
        $time = date('h:i:s');
        $updated_at = $date." ".$time;
        $d['updated_at'] = $updated_at;

		if(!empty($id) && !empty($d['rollno']) && !empty($d['sr']) && !empty($d['name']) && !empty($d['regno']) && !empty($d['mother']) && !empty($d['religion']) && !empty($d['birthplace']) && !empty($d['dob']) && !empty($d['dobwords']) && !empty($d['preschool']) && !empty($d['joindate']) && !empty($d['progress']) && !empty($d['behave']) && !empty($d['leavedate']) && !empty($d['year']) && !empty($d['fromdate']) && !empty($d['from_year']) && !empty($d['reason']) && !empty($d['remarks']))
		{
			$query = $this->db->where('id',$id)->update('lc',$d);
		}
		else
		{
			$error['status']='400';
			$error['msg'] = 'Please fill all credentials';
			echo json_encode($error);
			exit();
		}
		if($query)
		{
			$d['status']='200';
			$d['msg']='L.C. Updated Successfully';
		}
		else
		{
			$d['status']='400';
			$d['msg']='Failed to Update L.C.';
		}
		echo json_encode($d);
	}
	public function delete_std_lc($id)
	{
		error_reporting(0);
		$d = array();
		$error = array();
		$db_id = $this->db->select('id')->get_where('lc',array('id'=>$id));
		// echo $db_id->row()->id;
		if($db_id->row()->id)
		{
			$query = $this->db->delete('lc',array('id' => $id));
			if($query)
			{
				$d['status']='200';
				$d['msg']='L.C. Deleted Successfully';
			}
			else
			{
				$error['status']='400';
				$error['msg']='Failed to Delete L.C.';
				echo json_encode($error);
				exit();
			}
		}
		else
		{
			$error['msg']="Id not found";
			echo json_encode($error);
			exit();
		}
		echo json_encode($d);
	}
}
?>