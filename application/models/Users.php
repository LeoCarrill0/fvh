<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Model { 

    function __construct() {
        $this->load->database();
    }
    
    public function create($datos) {
        if(!$this->db->insert('login', $datos)) {
            return false;
        }
        return true;
    }
}
?>