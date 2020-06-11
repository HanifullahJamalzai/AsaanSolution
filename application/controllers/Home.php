
<?php 

class Home extends CI_Controller
{
	private $data = [];
	function __construct(){

		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->database();

		$this->load->model('user_model');
		$this->load->model('post_model');
		$this->data["assets"] = base_url().'assets';
	}

	public function index(){
		$this->load->view('home/index', $this->data);
	}
	
	public function home(){
		$pn = $this->session->userdata('user_pn');
		$this->data['users'] = $this->user_model->get_spe_user($pn);

		$this->data['posts'] = $this->post_model->select_posts();
		$this->load->helper('form');
		$this->load->view('home/home', $this->data);
	}
	public function profile(){
		
		
		$user_pn = $this->session->userdata('user_pn');
		$data['users'] = $this->user_model->get_spe_user($user_pn);
		// $this->data['users'] = $this->user_model->select_users($user_id);
		$this->load->view('home/profile', $data);
	}

	public function insert_user(){
		
		$image = $_FILES['user_image'];
		$ext = pathinfo($image['name'], PATHINFO_EXTENSION);
		$user_image = 'file_'.rand(1000,99999).'.'.$ext;

		$user_pn = 'PN'.rand(1000,9999);

		move_uploaded_file($image['tmp_name'],'uploads/users/'.$user_image);
		
		$data = array(
			'user_name' =>  $_POST['user_name'],
			'user_email'=> $_POST['user_email'],
			'user_password' => md5($_POST['user_password']),
			'user_kind' =>$_POST['user_kind'],
			'user_join_date' => date('Y-m-d'),
			'user_pn'=> $user_pn,
			'user_image' => $user_image
		);

		$user_id = $this->user_model->insert_user($data);

		$this->session->set_userdata(array(
			'user_id' => $user_id,
			'user_name' => $_POST['user_name'],
			'user_email' => $_POST['user_email'],
			'user_image'=> $user_image,
			'user_pn'=> $user_pn,
			'user_join_date'=> date('Y-m-d')
		));


		redirect('home/profile');
	
	}
	public function login_user(){

		$user_pn = $_POST['user_pn'];
		$password = md5($_POST['user_password']);
		$data = $this->user_model->select_users($user_pn, $password);

		if($data){
		$this->session->set_userdata(array(
						'user_id' => $data[0]["user_id"],
						'user_name' => $data[0]["user_name"],
						'user_email' => $data[0]["user_email"],
						'user_image'=> $data[0]["user_image"],
						'user_pn'=> $data[0]["user_pn"],
						'user_join_date'=> $data[0]["user_join_date"]
					     ));
		redirect(base_url().'Home/home');
		}else{

			redirect(base_url().'Home/index');
		}
	}
	public function logout(){
		
		$array_items = array('user_email','user_pn','user_name','user_image', 'user_join_date', 'user_id');

		$this->session->unset_userdata($array_items);

		redirect(base_url().'home/index');
	}
	public function insert_post(){
		// echo "<h1>	HELLO </h1>";
		// print_r($_POST);
		// var_dump($_POST);
		// exit;

		if (isset($_POST['submit'])) {
			$data = array(
				'post_title' =>  $_POST['post_title'],
				'post_description'=> $_POST['post_description'],
				'post_date' => date('Y-m-d'),
				'post_user_pn' =>$_SESSION['user_pn'],
				'project_bid' => $_POST['project_bid']
			);
			$this->post_model->insert_post($data);
			redirect(base_url().'home/');

		}else{
			redirect(base_url().'home');
		}	
	
	}



	// =============================================================
	public function insert_projct_post()
	{
		if(isset($_POST['submit'])){
		$this->load->model('user_model');

			$user_pn = $this->session->userdata('user_pn');
			$data = array(
				'post_title' => $_POST['project_title'] ,
				'post_description' => $_POST['project_description'],
				'project_bid'			=>$_POST['project_bid'],
				'post_date'				=>date('Y-m-d'),
				'post_user_pn'			=>$user_pn
				 );
			$res = $this->user_model->insert_project_postdata($data);
			if($res){
				redirect('Home/index');
			}
		}
	}
}
?>
	
