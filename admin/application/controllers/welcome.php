<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct(){
	 	
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('login');
		$this->load->helper('url');
		$this->load->database();
		
		
	 }
	 
	public function index()
	{
		$this->load->view('login');
	}
	public function login_verify()
	{
		$result = $this->admin->login_verify();/*Function Arguments needed*/
			
			if($result){
				//echo "one";
				redirect(base_url().'index/home');
				
			}else{
				
				redirect(base_url().'index/error');
			}
		
}
public function dashboard()
	
	{
		
		$login = $this->login->login_verify();
		
		if($login){
			
		$this->load->view('header');
		$this->load->view('topnav');
		$this->load->view('sidebar');
		$this->load->view('dash_board');
		$this->load->view('footer');
		}else{
		
		$data = array('msg' => 'Invalid Username/ Password');
		$this->load->view('login', $data);
	   }
	}
public function pages()
	
	{
		$this->load->view('header');
		$this->load->view('topnav');
		$this->load->view('pages');
		$this->load->view('sidebar');		
		$this->load->view('footer');
	}
	
	public function page_inner()
	
	{		
		$this->load->view('header');
		$this->load->view('topnav');
		$this->load->view('pages_inner');
		$this->load->view('sidebar');		
		$this->load->view('footer');
	}
	public function createuser()
	
	{		
		$this->load->view('header');
		$this->load->view('topnav');
		$this->load->view('create_user');
		$this->load->view('sidebar');		
		$this->load->view('footer');
	}
	
	public function adduser(){
		
		
		$add_user = $this->login->add_user();
		if($add_user){
		$data['msg'] = "New User has been created successfully.";
		$this->load->view('header');
		$this->load->view('topnav');
		$this->load->view('create_user', $data);
		$this->load->view('sidebar');		
		$this->load->view('footer');
			
		}else{
			
		$data['msg'] = "Email Address already exist";
		$this->load->view('header');
		$this->load->view('topnav');
		$this->load->view('create_user', $data);
		$this->load->view('sidebar');		
		$this->load->view('footer');
		}		
	}
	public function users()	
	{
		$user_data['data'] = $this->login->allusers();
		//$user_data['current_ads'] = $this->login->users_current_status();
		$this->load->view('header');
		$this->load->view('topnav');
		$this->load->view('users', $user_data);
		$this->load->view('sidebar');		
		$this->load->view('footer');
	}
	function user_delete(){
		$cust_id = $this->uri->segment(3);
		$delete = $this->login->userdelete($cust_id);
		if($delete)
		redirect('welcome/users','refresh');
	}
	
	public function product_fields()
	
	{
		$field['data'] = $this->login->pfields();	
		$field['data1'] = $this->login->pfields1();		
		$this->load->view('header');
		$this->load->view('topnav');
		$this->load->view('product_fields', $field);
		$this->load->view('sidebar');		
		$this->load->view('footer');
	}
	public function allproducts()
	
	{
		//$data['active'] = $this->login->getfields1();
		$this->load->view('header');
		$this->load->view('topnav');
		$this->load->view('allproducts');
		$this->load->view('sidebar');		
		$this->load->view('footer');
	}
	
	public function add_product()
	
	{
		$data['active'] = $this->login->getfields1();
		$this->load->view('header');
		$this->load->view('topnav');
		$this->load->view('add_products', $data);
		$this->load->view('sidebar');		
		$this->load->view('footer');
	}
	
	public function product_add()
	
	{
		$data['added'] = $this->login->product_add();
		$this->load->view('header');
		$this->load->view('topnav');
		$this->load->view('allproducts', $data);
		$this->load->view('sidebar');		
		$this->load->view('footer');
	}
	public function allcategories()
	
	{
		$data['category'] = $this->login->getcategory();
		$this->load->view('header');
		$this->load->view('topnav');
		$this->load->view('allcategories', $data);
		$this->load->view('sidebar');		
		$this->load->view('footer');
	}
	public function category()
	
	{
		$data['category1'] = $this->login->getcategory();
		$this->load->view('header');
		$this->load->view('topnav');
		$this->load->view('category', $data);
		$this->load->view('sidebar');		
		$this->load->view('footer');
	}
	public function add_category()
	
	{
		$data1= $this->login->add_category();
		if($data1){
			
			$data['msg'] = "Category added successfully";
		}
		$this->load->view('header');
		$this->load->view('topnav');
		$this->load->view('allcategories', $data);
		$this->load->view('sidebar');		
		$this->load->view('footer');
	}
  public function edit_category()
	
	{
				
		$data1['id']= $this->uri->segment(3);
		if($data1){
			
			$this->load->view('header');
			$this->load->view('topnav');
			$this->load->view('edit_category', $data1);
			$this->load->view('sidebar');		
			$this->load->view('footer');
			
		}
		
	}

	public function update_category()
	
	{
		
		$data1= $this->login->update_category();
		if($data1){
			
			$data['msg'] = "Category updated successfully";
		}
		$this->load->view('header');
		$this->load->view('topnav');
		$this->load->view('allcategories', $data);
		$this->load->view('sidebar');		
		$this->load->view('footer');
	}
	
	public function latest()
	
	{
		$this->load->view('header');
		$this->load->view('topnav');
		$this->load->view('latest');
		$this->load->view('sidebar');		
		$this->load->view('footer');
	}
	
	public function latest_display()
	
	{
			if ( !isset($_REQUEST['term']) )
   				 exit;
			$rs = mysql_query('select zip, city, state from zipcode where zip like "'. mysql_real_escape_string($_REQUEST['term']) .'%" order by zip asc limit 0,10', $dblink);
			
			$data = array();
			if ( $rs && mysql_num_rows($rs) )
			{
				while( $row = mysql_fetch_array($rs, MYSQL_ASSOC) )
				{
				$data[] = array(
				'label' => $row['zip'] .', '. $row['city'] .' '. $row['state'] ,
				'value' => $row['zip']
				);
				}
			}
			
			echo json_encode($data);
			flush();

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */