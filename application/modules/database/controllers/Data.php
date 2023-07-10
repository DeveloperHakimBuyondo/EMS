<?php

       class Data extends Emp{
            public function __construct(){
                parent:: __construct();
                // $this->load->database();
            }

            public function index(){
                $this->load->model('database_mdl');
                $this->database_mdl->get_data($table_name);
            }
       }