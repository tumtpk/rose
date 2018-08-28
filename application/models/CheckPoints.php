<?php 

if(!defined('BASEPATH')) exit('No direct script allowed');

class CheckPoints extends CI_Model{

    function getCheckPoint($checktime_id, $course_id, $userId, $checkpoint_id=null){
        
        if($checkpoint_id != null){
            $this->db->where_not_in('checkpoint_id', $checkpoint_id);
        }

        $this->db->where("checktime_id", $checktime_id);
        $this->db->where("course_id", $course_id);
        $this->db->where("users_id", $userId);
        return $this->db->get("checkpoint");

    }

    function getAllCheckPoint($course_id, $userId){
        $this->db->from("checkpoint");
        $this->db->join("checktime", "checkpoint.checktime_id = checktime.id");
        $this->db->where("checkpoint.course_id", $course_id);
        $this->db->where("checkpoint.users_id", $userId);
        return $this->db->get();
    }

    function getCheckPointByCheckTimeId($checktime_id, $user_id){
        $this->db->where("checktime_id", $checktime_id);
        $this->db->where("users_id", $user_id);
        return $this->db->get("checkpoint")->row();
    }

    function checkIn($data){
        $result = $this->db->insert('checkpoint', $data);
        return $result;
    }

    function checkOut($data){
        $this->db->where('checkpoint_id',$data['checkpoint_id']);
        $result = $this->db->update('checkpoint', $data);
        return $result;
    }

}