
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

                    $access = $this->input->post('user_access');
                    $name = $this->input->post('username');
                    $user_access = $this->users_db->block_user_by_access($table_name)->num_rows();
                    $u_name = $this->users_db->block_user_by_username($table_name, $name)->num_rows();

                        if($user_access > 0 and $access > 0){
                            return FALSE;
                        }elseif($u_name > 0){
                            return "name_failed";
                        }else{

                            $this->users_db->register_users_data($table_name, $data);
                            return true;
                            
                        }
    



            }

            // Login here
            function logindata($un,$pw)
            {
                $this->db->where('username',$un);               
                $this->db->where('password',$pw);
                $qry=$this->db->get("users");
                if($qry->num_rows()>0)
                {
                    $result=$qry->result_array();
                    return $result;
                    
                }
            }

            // Worker login here
            function worker_logindata($employee_id)
            {
                $this->db->where('employee_id', $employee_id);
                $qry=$this->db->get("employees");
                if($qry->num_rows()>0)
                {
                    $result=$qry->result_array();
                    return $result;
                    
                }
            }

            
            // // User Login here
            // public function login($username, $password){
            //     // validate
            //     $this->db->where('username', $username);
            //     $this->db->where('password', $password);
                
            //     $results = $this->db->get('users');

            //         if ($results->num_rows() == 1) {
            //             return $results->row(0)->user_id;
            //         }
            //         else{
            //             return false;
            //         }
            // }

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