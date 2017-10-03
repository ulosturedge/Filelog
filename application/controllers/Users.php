<?php 
class Users extends MY_Controller{
    
    
    
    public function index () {
        
        $this->load->view('login');
    
    }
    
    public function register_page() {
        
        $this->load->view('register');
    }
    
    
	public function register(){
        
        
		//Validation Rules
		$this->form_validation->set_rules('fname','First Name','trim|required');
        $this->form_validation->set_rules('uid','Username','trim|required|min_length[4]|max_length[16]');
        $this->form_validation->set_rules('pwd','Password','trim|required|min_length[4]|max_length[50]');
        $this->form_validation->set_rules('password2','Confirm Password','trim|required|matches[pwd]');
		
		if ($this->form_validation->run() == FALSE){
			//Show View
			$data['main_content'] = 'register';
			$this->load->view('register', $data);
            
		}
		else{
			 if($this->User_model->register()){
                 
                 
                 
                 $this->session->set_flashdata('registered', 'User successfully registered');
                 
                 redirect('public/judicial/user_list');
				
            }
            
		}	
	}
	
	public function login(){
        
        
		$this->form_validation->set_rules('uid','uid','trim|required|min_length[4]|max_length[16]');
        $this->form_validation->set_rules('pwd','pwd','trim|required|min_length[4]|max_length[50]');
		
		$uid = $this->input->post('uid');
		$pwd = md5($this->input->post('pwd'));
		
		$user_id = $this->User_model->login($uid, $pwd);
		echo isset($user_id)? "true" : "false";
		 //Validate user
        if($user_id){
             //Create array of user data
            $data = array(
                       'user_id'   => $user_id,
                       'uid'  => $uid,
                       'logged_in' => true
             );
			//Set session userdata
            print_r($data);
			$this->session->set_userdata($data);
                   
			//Set message
			$this->session->set_flashdata('pass_login', 'You are logged in');
			redirect('public/judicial/dashboard');
        } else {
            //Set error
             $this->session->set_flashdata('fail_login', 'Sorry, the login info that you entered is invalid');
			redirect('public/users');
        }
	}
	
	public function logout(){
		//Unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('uid');
        $this->session->sess_destroy();

        redirect('public/users');
	}
    
   
    
   
    
    
}