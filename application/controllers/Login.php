<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Login Page";
            $this->load->view('admin/header_admin', $data);
            $this->load->view('login/login');
            $this->load->view('admin/footer_admin');
        } else {
            $this->_login();    
        }
    }
    

    private function _login(){
        $username= $this->input->post('username');
        $passwrod = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        
        if($user){
            // usernya ada
        }else {
            // usernya tidak ada
        }
        


    }
}