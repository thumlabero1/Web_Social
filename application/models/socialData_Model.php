<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class socialData_Model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getdatabase()
	{
		$this->db->select('*');
		$ketqua = $this->db->get('socialdata');

		$ketqua = $ketqua->result_array();

		return $ketqua;
		//echo "<pre>";
		//var_dump($ketqua);
	}

	// function deleteDataById($id)
	// {
	// 		$this->db->where('id', $id);
	// 		if ($this->db->delete('so_sim')) {
				
	// 		}
	// 		else
	// 		{
	// 			echo 'delete not complete';
	// 		}
	// }
	// function editById($i)
	// {
	// 	$this->db->select('*');
	// 	$this->db->where('id', $i);
	// 	$dulieu =$this->db->get('so_sim');
	// 	$dulieu = $dulieu->result_array();
	// 	return $dulieu;
	// }
	// public function updateDataById($id,$so,$gia)
	// {
	// 	$dulieucanupdate = array(
	// 		'id' => $id,
	// 		'so' => $so,
	// 		'gia' =>'gia'
	// 		);
	// 	$this->db->where('id', $id);
	// 	 return $this->db->update('so_sim', $dulieucanupdate);
	// }
}

/* End of file showData_Model.php */
/* Location: ./application/models/showData_Model.php */