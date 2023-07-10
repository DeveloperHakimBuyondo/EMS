

<?php

      class Templates extends Emp{
            public function __construct(){
                parent:: __construct();
            }

            public function index(){

                //$data['title'] = "Temb";

                $this->load->view('templates/header');
                $this->load->view('templates/footer');
            }
      }