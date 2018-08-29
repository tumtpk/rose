<?php 

if(!defined('BASEPATH')) exit('No direct script allowed');

class Registerquizs extends CI_Model{

    function __construct() {
        parent::__construct(); 
        
    }
    function insert($data){
        return = $this->db->insert('target',$data);
    }

}