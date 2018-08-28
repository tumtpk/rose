<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attraction extends CI_Controller {

    public function index()
    {
        // $this->load->view("lib");
        $this->load->view("index");
    }

    public function createquize()
    {
        // $this->load->view("lib");
        $this->load->view("createquize");
    }

    public function quiz()
    {
        // $this->load->view("lib");
        $this->load->view("quiz");
    }

    public function share($userId){
        // $this->load->view("lib");
        $this->load->view("share");
    }

    public function success(){
        //กลับไปยัง index
        $this->load->view("success");
    }

}