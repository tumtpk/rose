<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registerquiz extends BD_Controller {
    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model("registerquizs");
    }

    function insert_post(){
        $name = $this->post("$name");
        $year = $this->post("$year");
        $major = $this->post("$major");
        $acdamy = $this->post("$acdamy");
        $gender = $this->post("$gender");
        
        $data = array(
            'quizId' => null,
            'major' =>$major,
            'acdamy' =>$acdamy,
            'gender' =>$gender,
            'name' => $name,
            'year' => $year
        );
        $result = $thsi->registerquizs->insert($data);
    }

}
