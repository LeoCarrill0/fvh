<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Model { 
    
    public $variable;

    public function __construct() {
        $this->load->database();
    }
    
    public function create($username, $password) {
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $q =  $this->db->get('usuario');
        print $q->row();
        if($q->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }
}
?>