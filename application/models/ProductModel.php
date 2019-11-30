<?php 

class ProductModel extends CI_Model
{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getData()
	{
		$data = $this->db->get('product');
		return $data->result();
	}

	public function insertData($product_name, $product_price)
	{
		$data 	= array(
			'product_name' 	=> $product_name,
			'product_price'	=> $product_price,
		);
		if($this->db->insert('product',$data)){
			return "1";
		}else{
			return "0";
		}
	}

	public function delete($id)
	{
		$this->db->where('product_id',$id);
		$this->db->delete('product');
		
	}

	public function update_getData($id)
	{
		$this->db->where('product_id',$id);
		$data = $this->db->get('product');
		return $data->result();
	}

	public function updated($product_name,$product_price,$id)
	{
		$data 	= array(
			'product_name' 	=> $product_name,
			'product_price'	=> $product_price,
		);
		$this->db->where('product_id',$id);
		if($this->db->update('product',$data)){
			return "1";
		}else{
			return "0";
		}
	}
}