<?php 
/**
 * 
 */
class Post_model extends CI_Model
{
	
	public function select_posts($id= null){
		
		$this->db->join("users" , "users.user_pn = posts.post_user_pn" , "inner");
		$this->db->order_by("posts.post_id DESC");
		if ($id) {
			$data = $this->db->where('post_user_id',$id)->get("posts")->result_array();
		}
		else{
			$data = $this->db->get("posts")->result_array();
		}

		return $data;
	}

	public function insert_post($data){

		$this->db->insert('posts', $data);
		// redirect(base_url().'home/home');
	}

	public function delete_post($post_id){

		$this->db->delete('posts', array('post_id' => $post_id ));

		redirect(base_url().'home/profile');
	}

	public function get_post($post_id){
		$data = $this->db->where("post_id", $post_id)->get("posts")->result_array();
		return $data[0];
	}

	public function update_post($data, $id){
		$this->db->set($data);
		
	}
}


?>