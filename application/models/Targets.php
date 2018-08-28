<?php 

if(!defined('BASEPATH')) exit('No direct script allowed');

class Targets extends CI_Model{

    function __construct() {
        parent::__construct(); 
        
    }

    function allTarget_count()
    {   
        $query = $this->db->get('taget');
        return $query->num_rows();                                                                                                                                                                                        
    }
    
    function allTarget($limit,$start,$col,$dir)
    {   
       $query = $this->db->limit($limit,$start)
                ->order_by($col,$dir)
                ->get('taget');
        
        if($query->num_rows()>0){
            return $query->result(); 
        }else{
            return null;
        }
        
    }

    function target_search($limit,$start,$search,$col,$dir)
    {
        $this->db->like('name',$search);
        $query = $this->db->limit($limit,$start)
                ->order_by($col,$dir)
                ->get('taget');
        
        if($query->num_rows()>0){
            return $query->result();  
        }else{
            return null;
        }
    }

    function target_search_count($search)
    {
        $query = $this->db->like('brandName',$search)
                ->get('taget');
    
        return $query->num_rows();
    } 

}