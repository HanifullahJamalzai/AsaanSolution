<?php 

class User_model extends CI_Model 
{
	
	public function select_users($user_pn, $pass){

		$this->db->where(["user_pn"=> $user_pn,"user_password" => $pass]);
		$data = $this->db->get("users")->result_array();
		return $data;
	
	}

	public function get_spe_user($pn)
	{
		$this->db->where('user_pn' , $pn);
		$usr_data = $this->db->get('users')->result();
		return $usr_data;
	}

	public function insert_user($data){
		
		$this->db->insert('users', $data);
		return $this->db->insert_id();

	}
	
	public function delete_user($user_id){

		$this->db->delete('users', array('user_id' => $user_id));
	}

	public function update_user($id){
		
	}



	public function insert_project_postdata($data)
	{
		$res= $this->db->insert('posts' , $data);
		return $res;
	}




}?>