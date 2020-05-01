<?php

class Main extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('certmodel');
		$this->load->database();
    date_default_timezone_set('Asia/Calcutta');
	}

	public function index()
	{
		if(isset($_POST['submit']))
		{
			$username = $this->input->post('username');
			$password = base64_encode($this->input->post('password'));
			$this->load->model("certmodel");
			if($this->certmodel->login($username,$password))
			{
				$query1 = $this->db->where('username',$username)->get('admin');
				$session_data = array(
					                    'id'=>$query1->row()->id,
					                    'name'=>$query1->row()->name,
										          'username' => $username
									           );
				$this->session->set_userdata($session_data);
				//echo 'Success';
				redirect('dashboard');
			}
			else
			{
				echo "<script>alert('Login Failed, Please Enter Correct Credentials');</script>";
			}
		}
		
		$this->load->view('login');
		// $this->load->view('login');
	}

	public function student_save()
	{
		if(isset($_POST['submit']))
		{
			$rollno = $this->input->post('rollno');
			$regno = $this->input->post('regno');
			$name = $this->input->post('name');
			$dob = $this->input->post('dob');
			$gender = $this->input->post('gender');
			$address = $this->input->post('address');
			$contact = $this->input->post('contact');

			$d = array(
							'rollno' => $rollno,
							'regno' => $regno,
							'name' => $name,
							'dob' => $dob,
							'gender' => $gender,
							'address' => $address,
							'contact' => $contact
			);
			$this->load->model('certmodel');
			$data = $this->certmodel->save_student($d);
			redirect("export");
		}
		else
		{
			$this->dashboard();
		}
	}

	public function dashboard()
	{
    if(empty($_SESSION['id']))
     	{
       	redirect(base_url());
    	}
		$sql = "SELECT * FROM student";
		$q = $this->db->query($sql);
		$students['students'] = $q->result();
		$this->load->view('dashboard',$students);
	}
	public function logout()
	{
      $this->session->sess_destroy();
      redirect(base_url());
  }

    public function edit($id)
    {
    	$id = $this->certmodel->get_Studentid($id);
    	$data = array();
    	$data['id'] = $id;

    	$this->load->view('edit',$data);
    	$this->newedit();
    }

    public function newedit()
    {

    	$user_id = $this->uri->segment(3);
    	
    	if(isset($_POST['update']))
    	{
    		$rollno = $this->input->post('rollno');
    		$regno = $this->input->post('regno');
    		$name = $this->input->post('name');
    		$dob = $this->input->post('dob');
    		$gender = $this->input->post('gender');
    		$address = $this->input->post('address');
    		$contact = $this->input->post('contact');
        $date = date('Y-m-d');
        $time = date('h:i:s');
        $updated_at = $date." ".$time;

    		$d = array(
    						'rollno' => $rollno,
    						'regno' => $regno,
    						'name' => $name,
    						'dob' => $dob,
    						'gender' => $gender,
    						'address' => $address,
    						'contact' => $contact,
                'updated_at' => $updated_at
    		);
    		$this->certmodel->update_student($user_id,$d);
    		
    		redirect("export");
    	}
    	
    }
    
    public function demo()
    {
    	if(empty($_SESSION['id']))
       	{
       		redirect(base_url());
    	}
    	$this->load->view('edit');
    }

    public function delete($id)
    {
    	$this->certmodel->delete_student($id);
    	redirect("export");
    }

   	public function export()
   	{
   		if(empty($_SESSION['id']))
       	{
       		redirect(base_url());
    	}
   		$sql = "SELECT * FROM student ORDER BY id DESC" ;
		$q = $this->db->query($sql);
		$students['students'] = $q->result();
		//$this->load->view('dashboard',$students);
   		$this->load->view('export',$students);
   	}
   	public function documents()
   	{
   		if(empty($_SESSION['id']))
       	{
       		redirect(base_url());
    	}
   		$this->load->view('documents');
   	}
   	public function add_data()
   	{
   		if(isset($_POST['submitt']))
   		{
   			$rollno = $_POST['rollno'];
   			$regno = $_POST['regno'];
        $name = $_POST['name'];
   			$c1 = $_POST['c1'];
   			$c2 = $_POST['c2'];
   			$c3 = $_POST['c3'];
   			$c4 = $_POST['c4'];
   			$c5 = $_POST['c5'];
   			$c6 = $_POST['c6'];
   			$c7 = $_POST['c7'];
   			$c8 = $_POST['c8'];
   			$c9 = $_POST['c9'];
   			$c10 = $_POST['c10'];
   			$c11 = $_POST['c11'];
   			$c12 = $_POST['c12'];
   			$c13 = $_POST['c13'];
   			$c14 = $_POST['c14'];
   			$c15 = $_POST['c15'];
   			$c16 = $_POST['c16'];

   			$data = array(
   							'rollno' => $rollno,
   							'regno' => $regno,
                'name' => $name,
   							'marksheet' => $c1,
   							'lc' => $c2,
   							'seven' => $c3,
   							'caste' => $c4,
   							'nonc' => $c5,
   							'sports' => $c6,
   							'scout' => $c7,
   							'freedom' => $c8,
   							'krushi' => $c9,
   							'farmer' => $c10,
   							'father' => $c11,
   							'income' => $c12,
   							'hand' => $c13,
   							'break' => $c14,
   							'project' => $c15,
   							'other' => $c16
   			);
   			$table = "document";

   			$this->certmodel->add_data($table,$data);
   			redirect('docs');

   		}
   		$this->load->view('documents');
   	}

   	public function view_doc_info($id)
    {
    	$roll = $this->certmodel->get_Student_doc_info($id);

    	$data = array();
    	$data['rollno'] = $roll;
    	 // print_r($data);
    	// exit();

    	$this->load->view('view_docs',$data);
    }

    public function add_lc()
    {
    	if(empty($_SESSION['id']))
       	{
       		redirect(base_url());
    	}
    	$this->load->view('lc');
    }

    public function add_lc_data()
    {
    	if(empty($_SESSION['id']))
       	{
       		redirect(base_url());
    	}
    	if(isset($_POST['submit']))
    	{
    		$rollno = $_POST['rollno'];
    		$sr = $_POST['sr'];
    		$regno = $_POST['regno'];
    		$name = $_POST['name'];
    		$mother = $_POST['mother'];
    		$religion = $_POST['religion'];
    		$birthplace = $_POST['birthplace'];
    		$dob = $_POST['dob'];
    		$dobwords = $_POST['dobwords'];
    		$preschool = $_POST['preschool'];
    		$joindate = $_POST['joindate'];
    		$progress = $_POST['progress'];
    		$behave = $_POST['behave'];
    		$leavedate = $_POST['leavedate'];

    		$year = $_POST['year'];
    		$fromdate = $_POST['fromdate'];
    		$from_year = $year.",".$fromdate;

    		$reason = $_POST['reason'];
    		$remarks = $_POST['remarks'];

    		$data = array(
    						'rollno' => $rollno,
    						'sr'=>$sr,
    						'regno'=>$regno,
    						'name' => $name,
    						'mother' => $mother,
    						'religion' => $religion,
    						'birthplace' => $birthplace,
    						'dob'=> $dob,
    						'dobwords' => $dobwords,
    						'preschool'=>$preschool,
    						'joindate'=>$joindate,
    						'progress'=>$progress,
    						'behave'=>$behave,
    						'leavedate'=>$leavedate,
    						'year' => $year,
    						'fromdate'=>$fromdate,
    						'from_year' => $from_year,
    						'reason'=>$reason,
    						'remarks'=>$remarks
    					);
    		$this->certmodel->add_lc_info($data);
    		redirect('add_lc');
   		}
	}

	public function view_lc($id)
	{
		$roll = $this->certmodel->view_student_lc($id);
    	$data = array();
    	$data['rollno'] = $roll;
		$this->load->view('lc_view',$data);
	}

	public function change_doc()
	{
		if(empty($_SESSION['id']))
       	{
       		redirect(base_url());
    	}
    $sql = "SELECT id, rollno, regno, name FROM document ORDER BY id DESC" ;
		$q = $this->db->query($sql);
		$documents['documents'] = $q->result();
		$this->load->view('change_docs',$documents);
	}

	public function delete_doc($id)
    {
    	$this->certmodel->delete_doc_info($id);
    	redirect("doc_change");
    }

    public function doc_edit($id)
    {
    	$id = $this->certmodel->get_document_id($id);
    	$data = array();
    	$data['id'] = $id;

    	$this->load->view('edit_docs',$data);
    	$this->doc_newedit();
    	
    }

    public function doc_newedit()
    {

    	$user_id = $this->uri->segment(3);
    	//echo $user_id;
    	
    	if(isset($_POST['update']))
    	{
    		// $name = $this->input->post('name');
    		// $contact = $this->input->post('contact');
    		// $gender = $this->input->post('gender');
    		$rollno = $_POST['rollno'];
    		$regno = $_POST['regno'];
    		$marksheet = $_POST['marksheet'];
    		$lc = $_POST['lc'];
    		$seven = $_POST['seven'];
    		$caste = $_POST['caste'];
    		$nonc = $_POST['nonc'];
    		$sports = $_POST['sports'];
    		$scout = $_POST['scout'];
    		$freedom = $_POST['freedom'];
    		$krushi = $_POST['krushi'];
    		$farmer = $_POST['farmer'];
    		$father = $_POST['father'];
    		$income = $_POST['income'];
    		$hand = $_POST['hand'];
    		$break = $_POST['break'];
    		$project = $_POST['project'];
    		$other = $_POST['other'];
        $date = date('Y-m-d');
        $time = date('h:i:s');
        $updated_at = $date." ".$time;

    		$d = array(
    						'rollno' => $rollno,
    						'regno' => $regno,
    						'marksheet' => $marksheet,
    						'lc' => $lc,
    						'seven' => $seven,
    						'caste' => $caste,
    						'nonc' => $nonc,
    						'sports' => $sports,
    						'scout' => $scout,
    						'freedom' => $freedom,
    						'krushi' => $krushi,
    						'farmer' => $farmer,
    						'father' => $father,
    						'income' => $income,
    						'hand' => $hand,
    						'break' => $break,
    						'project' => $project,
    						'other' => $other,
                'updated_at' => $updated_at
    		);
    		$this->certmodel->update_document($user_id,$d);
    		
    		redirect("doc_change");
    	}
    	
    }

  public function change_lc()
	{
       if(empty($_SESSION['id']))
       	{
       		redirect(base_url());
    	}
		$sql = "SELECT id, rollno, regno, name FROM lc " ;
		$q = $this->db->query($sql);
		$lc['lc'] = $q->result();
		$this->load->view('change_lc',$lc);
	}

	public function lc_edit($id)
    {
    	$id = $this->certmodel->get_lc_id($id);
    	$data = array();
    	$data['id'] = $id;

    	$this->load->view('edit_lc',$data);
    	$this->lc_newedit();
    	
    }

    public function lc_newedit()
    {

    	$user_id = $this->uri->segment(3);
    	//echo $user_id;
    	
    	if(isset($_POST['update']))
    	{
    		$rollno = $_POST['rollno'];
    		$sr = $_POST['sr'];
    		$regno = $_POST['regno'];
    		$name = $_POST['name'];
    		$mother = $_POST['mother'];
    		$religion = $_POST['religion'];
    		$birthplace = $_POST['birthplace'];
    		$dob = $_POST['dob'];
    		$dobwords = $_POST['dobwords'];
    		$preschool = $_POST['preschool'];
    		$joindate = $_POST['joindate'];
    		$progress = $_POST['progress'];
    		$behave = $_POST['behave'];
    		$leavedate = $_POST['leavedate'];

    		$year = $_POST['year'];
    		$fromdate = $_POST['fromdate'];
    		$from_year = $year.",".$fromdate;

    		$reason = $_POST['reason'];
    		$remarks = $_POST['remarks'];
        $date = date('Y-m-d');
        $time = date('h:i:s');
        $updated_at = $date." ".$time;

    		$d = array(
    						'rollno' => $rollno,
    						'sr'=>$sr,
    						'regno'=>$regno,
    						'name' => $name,
    						'mother' => $mother,
    						'religion' => $religion,
    						'birthplace' => $birthplace,
    						'dob'=> $dob,
    						'dobwords' => $dobwords,
    						'preschool'=>$preschool,
    						'joindate'=>$joindate,
    						'progress'=>$progress,
    						'behave'=>$behave,
    						'leavedate'=>$leavedate,
    						'year' => $year,
    						'fromdate'=>$fromdate,
    						'from_year' => $from_year,
    						'reason'=>$reason,
    						'remarks'=>$remarks,
                'updated_at'=>$updated_at
    		);

    		$this->certmodel->update_lc($user_id,$d);
    		
    		redirect("lc_change");
    	}
    	
    }

    public function delete_lc($id)
    {
    	$this->certmodel->delete_lc_info($id);
    	redirect("lc_change");
    }

    public function view_student_info($id)
    {
    	$roll = $this->certmodel->get_student_info($id);

    	$data = array();
    	$data['rollno'] = $roll;
    	// print_r($data);
    	// exit();

    	$this->load->view('view_student',$data);
    }

}
?>
