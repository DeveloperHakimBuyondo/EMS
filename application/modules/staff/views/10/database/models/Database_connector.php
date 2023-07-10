

<?php

      class Database_connector extends CI_Model{
            public function __construct(){
                  parent:: __construct();
                  $this->load->database();
            }

            // Calling data from the DB - Note: all pages will call data from Me...
            public function call_all_data($table_name){
                  $this->db->select('*');
                  $this->db->from($table_name);
                  $query = $this->db->get();
                  return $query;
            }

                        // Calling data by id desc
                        public function call_all_data_by_id_desc($table_name, $id_desc){
                              $this->db->select('emp_id');
                              $this->db->from($table_name);
                              $this->db->order_by($id_desc, 'DESC');
                              $this->db->limit(1);
                              $query = $this->db->get();
                              return $query;
                        }

                        // Calling data by where clause from the DB
                        public function call_all_data_by_where($table_name, $status, $value){
                              $this->db->select('*');
                              $this->db->from($table_name);
                              $this->db->where($status, $value);
                              $query = $this->db->get();
                              return $query;
                        }

                        // Calling All Salary Staff here
                        public function get_salary($table_name){
                              $this->db->select_sum('salary');
                              $this->db->from($table_name);
                              $query = $this->db->get();
                              return $query;
                        }

            // Add Data to the database
            public function add_data($table_name, $data){
                  $this->db->insert($table_name, $data);
                  return true;
            }

            // Update Employee Data the Database
            public function update_data($table_name, $update_id, $id, $data){
                  $this->db->where($update_id, $id);
                  $this->db->update($table_name, $data);
                  return true;
            }

                        // Pay Loans from here
                        public function pay($table_name, $pay_id, $id, $data){
                              $this->db->where($pay_id, $id);
                              $this->db->update($table_name, $data);
                              return true;
                        }

            // Delete Data from the Database
            public function delete_data($table_name, $delete_id, $id){
                  $this->db->where($delete_id, $id);
                  $this->db->delete($table_name);
                  return true;
            }

      }