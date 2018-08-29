<?php 

if(!defined('BASEPATH')) exit('No direct script allowed');

class Targets extends CI_Model{

    function __construct() {
        parent::__construct(); 
        
    }

    function insert($data){
        return = $this->db->insert('quiz',$data);
    }

}