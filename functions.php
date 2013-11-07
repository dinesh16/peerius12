<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


class user_model extends CI_Model {

    //var $id   = '';
    var $name = '';
    var $email    = '';
    var $logged    = '';

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        //$this->load->database();
    }
    
    function get_last_ten_entries() {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }

    function insert_entry(){
        $this->title   = $_POST['name']; // please read the below note
        $this->content = $_POST['email'];
        $this->logged  = date('Y-m-d H:i:s', time());
        $this->db->insert('entries', $this);
    }

    function update_entry(){
        $this->title   = $_POST['name'];
        $this->content = $_POST['email'];
        $this->logged    = date('Y-m-d H:i:s', time());
        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }
}



?>
