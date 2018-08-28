<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Target extends BD_Controller {
    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model("targets");
    }

    function search_post(){
        $columns = array( 
            0 => null
        );

        $limit = $this->post('length');
        $start = $this->post('start');
        $order = $columns[$this->post('order')[0]['column']];
        $dir = $this->post('order')[0]['dir'];

        $totalData = $this->targets->allTarget_count();

        $totalFiltered = $totalData; 

        if(empty($this->post('name')))
        {            
            $posts = $this->targets->allTarget($limit,$start,$order,$dir);
        }
        else {
            $search = $this->post('name'); 
            // $status = $this->post('status'); 
            $posts =  $this->targets->target_search($limit,$start,$search,$order,$dir);
            $totalFiltered = $this->targets->target_search_count($search);
        }

        $data = array();
        $index = 0;
        $count = 0;
        if(!empty($posts))
        {
            foreach ($posts as $post)
            {

                $nestedData[$count]['id'] = $post->Id;
                $nestedData[$count]['name'] = $post->name;
                $nestedData[$count]['year'] = $post->year;
                $nestedData[$count]['major'] = $post->major;
                $nestedData[$count]['acdamy'] = $post->acdamy;
                $nestedData[$count]['gender'] = $post->gender;
                $data[$index] = $nestedData;
                if($count >= 3){
                    $count = -1;
                    $index++;
                    $nestedData = [];
                }
                
                $count++;

            }
        }

        $json_data = array(
            "draw"            => intval($this->post('draw')),  
            "recordsTotal"    => intval($totalData),  
            "recordsFiltered" => intval($totalFiltered), 
            "data"            => $data   
        );

        $this->set_response($json_data);
    }

}