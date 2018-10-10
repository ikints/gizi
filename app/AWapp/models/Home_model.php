<?php
class Home_model extends CI_Model {

//user login valid
function valid_login($username, $password)
	{		

		$q = $this->db->select('
				a.id_user as ID,			
				a.username as Username,
				a.password as Password,
				a.status as Status,
				a.name as Name
			')
			
			->from('users a')
			->where('a.username', $username)
			->where('a.password', $password)
			;			
				
			$result = $q->get()->result();
			return $result;
				
	}
}