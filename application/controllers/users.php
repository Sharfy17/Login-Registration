<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('User');
  }


	public function index()
	{
		$this->load->view('home');
	}


  public function profile()
  {
    $data = array('name' => '');
    $this->load->view('user_info', $data);
    // if ($this->session->userdata('id')) {
    //   $this->load->view('user_info');
    // }
    // else {
    //   $this->load->view('home');
    // }
  }

  public function register()
  {
    $valid = $this->User->register($this->input->post());
    if ($valid != TRUE) {
      $this->load->view('home');
    }
      else {
        $id = $valid[1];
        $user = $this->User->get_user_by_id($id);

        $this->session->set_userdata('id',$user['id']);
        $this->session->set_userdata('name',$user['name']);
        $this->session->set_userdata('email',$user['email']);

      redirect('/Users/profile');
      }
    }

    public function login(){
      $logged_in = $this->User->login($this->input->post());
      if($logged_in){
        $this->session->set_userdata('id', $logged_in['id']);
        $this->session->set_userdata('name', $logged_in['name']);
        redirect('/Users/profile');
      } else {
        $this->session->set_flashdata('log_errors', "<p class ='errors'>Invalid login credentials</p>");
        redirect('/Users/index');
      }

    }
    public function log_out() {
      $this->session->sess_destroy();
      redirect('/Users/index');
    }


}
?>
