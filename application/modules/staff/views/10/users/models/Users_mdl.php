
<?php

      class Users_mdl extends CI_Model{
            // Constructor
            public function __construct(){
                parent:: __construct();
                $this->load->database();
            }


            //  Get all related data and use it
            public function get_all_data($table_name, $id = FALSE){
                $this->load->model('database/database_connector');

                if($id === FALSE){
                    $query = $this->database_connector->call_all_data($table_name);
                    return $query;
                }
                    $query = $this->db->get_where('departments', array('dep_id' => $id));
                    return $query;
            }

            // Register Users from here
            public function register_user($table_name, $enc_password){
                $this->load->model('database/users_db');

                $data = array(
                    'dep_id' => $this->input->post('department_id'),
                    'user_access' => $this->input->post('user_access'),
                    'username' => $this->input->post('username'),
                    'password' => $enc_password
                );

                $this->users_db->register_users_data($table_name, $data);
                return true;
            }

            // User Login here
            public function login($username, $password){
                // validate
                $this->db->where('username', $username);
                $this->db->where('password', $password);
                
                $results = $this->db->get('users');

                    if ($results->num_rows() == 1) {
                        return $results->row(0)->user_id;
                    }
                    else{
                        return false;
                    }
            }

            // Check username if it is exists
            // public function check_username_exists($username){
            //     $query = $this->db->get_where('users', array('username' => $username));

            //         if(empty($query->row_array())){
            //             return true;
            //         }else{
            //             return false;
            //         }
            // }
      }