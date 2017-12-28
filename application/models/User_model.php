<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function do_login($username,$password){
        $res = $this->db->query("SELECT * from user_application where username = '$username' and password = '$password' ")->row();
        return $res;
    }
}
?>
