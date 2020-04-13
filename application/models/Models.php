<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Models extends CI_Model {
	public function data_user()
	{
		return $this->db->get('user')->result();
	}

	function user(){
    return $this->db->get('user');
  }

	// get data pasien
	function userPasien(){
    return $this->db->get_where('user', array('level' => 2));
  }

	function tambahPasien_data($data)
  {
    $this->db->insert('data_pasien',$data);
  }

	function edit_pasien($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('data_pasien');
  }

	function dataPasien()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('data_pasien', 'data_pasien.id_user = user.id');
		$query = $this->db->get();
    return $query->result_array();
	}

	function dataPasien_home()
	{
		$a = $this->session->userdata('id');
		$query = 'select * from user as u join data_pasien as dp on u.id = dp.id_user where u.id="'.$a.'"';
		$do = $this->db->query($query)->result_array();
		return $do;
	}

	function rekamPasien_home()
	{
		$a = $this->session->userdata('id');
		$query = 'select * from user as u join rekam as r on u.id = r.id_user where u.id="'.$a.'"';
		$do = $this->db->query($query)->result_array();
		return $do;
	}

	function insert_rekamData($data)
  {
    $this->db->insert('rekam',$data);
  }

	function createUser_data($data)
  {
    $this->db->insert('user',$data);
  }

	function update_user($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('user');
  }

	function update_userData($data, $id)
  {
    $this->db->where('id',$id);
    $this->db->set($data);
    $this->db->update('user');
  }

	function hapus_user($id)
  {
    $this->db->where('id',$id);
    $this->db->delete('user');
  }

	function insert_news($data){
		$this->db->insert('news',$data);
	}

	function news(){
    return $this->db->get('news');
  }

	function displayNews($id){
		$this->db->where('id',$id);
		return $this->db->get('news');
  }

	function hapus_news($id)
  {
    $this->db->where('id',$id);
    $this->db->delete('news');
  }

	function update($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('news');
  }

	function update_news($data, $id)
  {
    $this->db->where('id',$id);
    $this->db->set($data);
    $this->db->update('news');
  }
}
