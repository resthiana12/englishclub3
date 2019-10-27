<?php 

class Member_model extends CI_model{
	public function getAllMember()
	{
		 return $this->db->get('member')->result_array();
	}

	public function tambahDataMember()
	{
		$data = [
			"name" => $this->input->post('name', true),
			"nrp" => $this->input->post('nrp', true),
			"motivation" => $this->input->post('motivation', true),
			"ig" => $this->input->post('ig', true),
			"phone" => $this->input->post('phone', true)
		];

		$this->db->insert('member', $data);
	}

	public function hapusDataMember($id)
	{
		//$this->db->where('id', $id);
		$this->db->delete('member', ['id' => $id]);
	}

	public function getMemberById($id)
	{
		return $this->db->get_where('member', ['id'=>$id])->row_array();
	}

	public function ubahDataMember()
	{
		$data = [
			"name" => $this->input->post('name', true),
			"nrp" => $this->input->post('nrp', true),
			"motivation" => $this->input->post('motivation', true),
			"ig" => $this->input->post('ig', true),
			"phone" => $this->input->post('phone', true)
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('member', $data);
	}
	
	public function cariDataMember()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('name', $keyword);
		$this->db->or_like('nrp', $keyword);
		$this->db->or_like('motivation', $keyword);
		$this->db->or_like('ig', $keyword);
		$this->db->or_like('phone', $keyword);
		return $this->db->get('member')->result_array();
	}
}