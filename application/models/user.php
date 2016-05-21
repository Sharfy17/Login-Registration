<?php

class User extends CI_Model {

  public function register($user){
    //loads built in CI form validation
    // $this->load->library('form_validation');
    $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[2]|alpha_numeric');
    $this->form_validation->set_rules('alias', 'Alias', 'trim|required|min_length[2]|alpha_numeric');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[users.email]|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|matches[confirmpassword]');
    $this->form_validation->set_rules('confirmpassword', 'Password Confirmation', 'trim|required');
    $this->form_validation->set_rules('dob', 'Date of Birth','trim|required|max_length[10]');


    if($this->form_validation->run()){
    $date = date('Y-m-d H:i:s');
    $query= "INSERT INTO users (name, alias, email, password, salt, dob, created_at) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $values = array($user['name'], $user['alias'], $user['email'], md5($user['password']), md5($user['confirmpassword']), $user['dob'], $date);

      if($this->db->query($query,$values)){
        $id = $this->db->insert_id();
            $success = array('valid', $id);
            return $success;
            }  }else {
              return false;
            }
      }


    public function get_user_by_id($id){
      $query = "SELECT id, name, email FROM users WHERE id = ?";
      $values = array($id);
      return $this->db->query($query, $values)->row_array();
    }

    public function login($post)
    {
      $check_user = "SELECT * FROM users WHERE users.email = ?";
      $user = $this->db->query($check_user, array($post['email']))->row_array();
      if($user) {
        if(md5($post['password']) == $user['password']){
          return $user;
        }
        else {
          return false;
        }
      }
        else{
          return false;
        }
    }

    //in case you want to remove someone
    public function destroy($email)
    {
      $query = "DELETE FROM email.users WHERE email = ?";
      $values = array($email);
      return $this->db->query($query,$values);
    }


}

  ?>
