<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class login extends CI_Model{
	
	
	function login_verify(){
		
		$username = $this->input->post('username');
		$pass = MD5($this->input->post('password'));		
		$this->db->where('username', $username);
		$this->db->where('password', $pass);		
		$query = $this->db->get('mainadmin');
				
		if($query->num_rows > 0){
			
			$result = $query->row();			
			$data = array('uname' => $result->username);
			$this->session->set_userdata($data);
			return true;
			
		}else{
			
			return false;
		}	
		
	}
	
	function add_user(){
		
		$this->load->helper('date');
		$name = $this->input->post('username');
		$email = $this->input->post('useremail');
		$password = sha1($this->input->post('password'));
		
		$where = $this->db->where('s_email', $email);
		$Qry = $this->db->get('oc_t_user');
		
		if($Qry->num_rows >0 ){
			
			return false;
			
		}else{
		
		$data = array(
				 'dt_reg_date' => date('Y-m-d H:i:s'),
               	 's_name ' => $name,
               	 's_username' => 1,
                 's_password  ' => $password,
                 's_email ' => $email,
                 'b_enabled'=> 1,
                 'b_active'=>1
            );
		
	$this->db->insert('oc_t_user', $data); 
	return true;
		
}
		
}
	function allusers(){
		
		$this->db->where('b_enabled', 1);
		$Qry_user = $this->db->get('oc_t_user');
		if($Qry_user->num_rows > 0 ){
		
		//$users = $Qry_user->result_array();
			
		return $Qry_user->result();
			
		}else{
		
			return false;
		
		}
		
	}
	
	function users_current_status(){
		
		$where = "b_active =  1 AND MONTH(dt_pub_date) = MONTH(NOW()) AND YEAR(dt_pub_date)= YEAR(NOW())";
		$this->db->where($where);
		$Qry_user = $this->db->get('oc_t_item');
		if($Qry_user->num_rows > 0 ){			
		return $Qry_user->result();
			
		}else{
		
			return false;
		
		}
		
	}
	
	function userdelete($cust_id){
		
		$datas = array('b_active'=> 0);
		$this->db->where('pk_i_id', $cust_id);
		$this->db->update('oc_t_user', $datas);
		return true;
		
}
	function pfields(){
		
		$this->db->limit(16,0);
		$Qry = $this->db->get('product_fields');
		return $Qry->result();		
	}
	
	function pfields1(){
		
		$this->db->limit(31,16);
		$Qry = $this->db->get('product_fields');
		return $Qry->result();		
	}
	
	function getfields1(){
		
		$this->db->limit(4,0);
		$Qry = $this->db->get('product_fields');
		return $Qry->row();
		
	}
	/* function getallproducts(){
		
		$Qry = $this->db->get('products');
		return $Qry->row();
		
	} */
	
	function getcategory(){
		
		$Qry = $this->db->get('categories');
		return $Qry->row();
		
	}
	function add_category(){
									
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			//$this->load->view('upload_form', $error);
		}else{
			$datas = $this->upload->data();
			$file_name = $datas['file_name'];
		
		$cname = $this->input->post('c_name');
		$mdesc = $this->input->post('meta_desc');
		$mkey = $this->input->post('meta_key');
		$desc = $this->input->post('descriptions');
		$parent = $this->input->post('parent_id');
		$image = $this->input->post('img_file');
		$top = $this->input->post('top');
		$sort = $this->input->post('sortorder');
		$status = $this->input->post('status');
		
		$data = array(
				 'category_name' => $cname,
				 'meta_description' => $mdesc,
				 'meta_keyword' => $mkey,
				 'description' => $desc,
				 'parent' => $parent,
				 'image' => $image,
				 'top' => $top,
				 'sort_order' => $sort,
				 'status' => $status
				 
            );
	$this->db->insert('categories', $data); 
	return true;
		}
}

	function getcategory1(){
		
			$id = $this->uri->segment(3);
			$this->db->where('id', $id);
			$Qry = $this->db->get('categories');
			return $Qry->row();
		
	}
	
	function update_category(){
		
		
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			//$this->load->view('upload_form', $error);
		}else{
			$datas = $this->upload->data();
			$file_name = $datas['file_name'];
		

			//$this->load->view('upload_success', $data);
		
		
		$cname = $this->input->post('c_name');
		$mdesc = $this->input->post('meta_desc');
		$mkey = $this->input->post('meta_key');
		$desc = $this->input->post('descriptions');
		$parent = $this->input->post('parent_id');
		$top = $this->input->post('top');
		$sort = $this->input->post('sortorder');
		$status = $this->input->post('status');
		
		$data = array(
				 'category_name' => $cname,
				 'meta_description' => $mdesc,
				 'meta_keyword' => $mkey,
				 'description' => $desc,
				 'parent' => $parent,
				 'image' => $file_name,
				 'top' => $top,
				 'sort_order' => $sort,
				 'status' => $status
				 
            );
	$this->db->where('id', $this->input->post('hid'));		
	$this->db->update('categories', $data); 
	return true;
		}	
}
function product_add(){
	
	
									
		
		$pname = $this->input->post('p_name');
		$mdesc = $this->input->post('meta_desc');
		$mkey = $this->input->post('meta_key');
		$desc = $this->input->post('descriptions');
		$p_tags = $this->input->post('p_tags');
		$status = $this->input->post('status');
		$model = $this->input->post('model');
		$sku = $this->input->post('sku');
		$upc = $this->input->post('upc');
		$ean = $this->input->post('ean');
		$jan = $this->input->post('jan');
		$isbn = $this->input->post('isbn');
		$mpn = $this->input->post('mpn');
		$price = $this->input->post('price');
		$quantity = $this->input->post('quantity');
		$mquantity= $this->input->post('mquantity');
		$sub_stock = $this->input->post('sub_stock');
		$out_of_stock = $this->input->post('out_of_stock');
		$require_shipping = $this->input->post('require_shipping');
		$seokeyword = $this->input->post('seokeyword');
		$dimensions = $this->input->post('d_l')."+".$this->input->post('d_w')."+".$this->input->post('d_h');
		$length_class = $this->input->post('length_class');
		$weight= $this->input->post('weight');
		$weight_class = $this->input->post('weight_class');
		$product_category = $this->input->post('product_category');
		$related_product = $this->input->post('related_product');
		$discount_qty = $this->input->post('discount_qty');
		$discount_price = $this->input->post('discount_price');
		$special_price = $this->input->post('special_price');
		$mimg = $this->input->post('mimg');
		
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			//$this->load->view('upload_form', $error);
		}else{
			$datas = $this->upload->data();
			$file_name = $datas['file_name'];
		$data = array(
				 'product_name' => $pname,
				 'meta_tag_description' => $mdesc,
				 'meta_tag_keywords' => $mkey,
				 'descriptions' => $desc,
				 'product_tags' => $p_tags,
				 'model' => $model,
				 'sku' => $sku,
				 'upc' => $upc,
				 'ean' => $ean,
				 'jan' => $jan,
				 'isbn' => $isbn,
				 'mpn' => $mpn,
				 'price' => $price,
				 'quantity' => $quantity,
				 'minium_quantity' => $mquantity,
				 'subtract_stock' => $sub_stock,
				 'out_of_stock_status' => $out_of_stock,
				 'requires_shipping' => $require_shipping,
				 'seo_keyword' => $seokeyword,
				 'image' => $file_name,
				 'dimensions' => $dimensions,
				 'length_class' => $length_class,
				 'weight' => $weight,
				 'weight_class' => $weight_class,
				 'status' => $status,
				 'categories' => $product_category,
				 'related_products' => $related_product,
				 'discount_quantity' => $discount_qty,
				 'discount_price' => $discount_price,
				 'special_price' => $special_price,
				 'multiple_image' => $mimg
				        
				 
            );
	$this->db->insert('products', $data); 
	return true;
	}
}
		
}
	

?>