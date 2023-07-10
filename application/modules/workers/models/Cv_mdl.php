
<?php

      class Cv_mdl extends CI_Model{
            // Constructor
            public function __construct(){
                parent:: __construct();
                $this->load->database();
            }

            // Getting cv data by where clouse
            public function get_cv_data_by_where($table_name, $emp_id){
                $this->load->model('database/database_connector');
                $session_id = $this->session->userdata('emp_id');
                $query = $this->database_connector->get_cv_data_for_worker_by_where($table_name, $emp_id, $session_id);
                return $query;
            }

            // Upload worker cv from worker
            public function upload_worker_cv($table_name, $emp_cv){
                $this->load->model('database/database_connector');

                    $data = array(
                        'cv_name' => $emp_cv,
                        'emp_id'  => $this->session->userdata('emp_id')
                    );

                    $this->database_connector->upload_worker_cv_for_me($table_name, $data);
                    return true;
            }
      }