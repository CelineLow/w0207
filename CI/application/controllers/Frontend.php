<?php

class Frontend extends CI_Controller{

    public function home(){
        $this->load->view("header");
        $this->load->view("home");
        $this->load->view("footer");
    }

    public function product_list(){
        
        $data = [];
        $produc_list = [
            ["id" => 1, "title" => "TV"],
            ["id" => 2, "title" => "SS"],
        ];

        $data[] = $produc_list;

        $this->load->view("header");
        $this->load->view("product_list", $data);
        $this->load->view("footer");
    }

    public function product_detail($product_id){
        $product_id = 1;
        echo"<h1>product detail".$product_id."</h1>";
    }
}

?>