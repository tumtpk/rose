<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends BD_Controller {
    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model("quizs");
    }

    function insert_post(){
        $question2 = $this->post("$question2");
        $question3 = $this->post("$question3");
        $question4 = $this->post("$question4");
        $question5 = $this->post("$question5");
        $question6 = $this->post("$question6");
        $namedoquiz = $this->post("$namedoquiz");
        $Id = $this->post("Id");
        $score = $question2+$question3+$question4+$question5-$question6
        $data = array(
            'quizId' => null,
            'Id' => $Id,
            'namedoquiz' =>$namedoquiz,
            'score' =>$score

        );
        $result = $thsi->quiz->insert($data);
    }

}
