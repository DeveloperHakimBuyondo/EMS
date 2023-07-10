

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
                              $this->db->select('*');
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


                                                // Calling data by where clause from the DB
                                                public function call_all_data_by_id($table_name, $dep_id, $id){
                                                      $this->db->select('*');
                                                      $this->db->from($table_name);
                                                      $this->db->where($dep_id, $id);
                                                      $query = $this->db->get();
                                                      return $query;
                                                }

                                                // Calling data by where clause from the DB
                                                public function call_all_data_by_id_activity($table_name, $status, $dep_id, $value, $id){
                                                      $this->db->select('*');
                                                      $this->db->from($table_name);
                                                      $this->db->where($dep_id, $id);
                                                      $this->db->where($status, $value);
                                                      $query = $this->db->get();
                                                      return $query;
                                                }

                                                // Search employees by employee id
                                                public function search_employee_id($table_name, $employee_id, $search, $emp_status, $value){
                                                      $this->db->select('*');
                                                      $this->db->from($table_name);
                                                      $this->db->like($employee_id, $search, 'both');
                                                      $this->db->where($emp_status, $value);
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

                        // Calling data from the DB - Note: all pages will call data from Me...
                        public function get_employee_salary_and_increase($table_name, $update_id, $id){
                              $this->db->select('*');
                              $this->db->from($table_name);
                              $this->db->where($update_id, $id);
                              $query = $this->db->get();
                              return $query;
                        }

                                                // Calling All Salary Staff here
                                                public function calculate_salary($table_name, $emp_status, $value, $table_column){
                                                      $this->db->select_sum($table_column);
                                                      $this->db->from($table_name);
                                                      $this->db->where($emp_status, $value);
                                                      $query = $this->db->get();
                                                      return $query;
                                                }

                                                // Employee Salary increment requests from here
                                                public function get_employees_salary_requests($table_name){
                                                      $this->db->select('*');
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

                        // Calculating Payments
                        public function calculate_payments($table_name, $pay_id, $id){
                              $this->db->select('*');
                              $this->db->from($table_name);
                              $this->db->where($pay_id, $id);
                              $query = $this->db->get();
                              return $query;
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


            // Call All Chats properties fro here
            public function call_all_messages($table_name, $message_id, $value){
                  $this->db->select('*');
                  $this->db->from($table_name);
                  $this->db->where($message_id, $value);
                  $query = $this->db->get();
                  return $query;
            }

            // Send messages from here
            public function send_messages($table_name, $data){
                  $this->db->insert($table_name, $data);
                  return true;
            }

//-----------------------------------------------------------------------------------------------------------------------------------

                              // Calling all Workers whos status is still active
                              public function call_all_workers_by_status($table_name, $status, $value){
                                    $this->db->select('*');
                                    $this->db->from($table_name);
                                    $this->db->where($status, $value);
                                    $query = $this->db->get();
                                    return $query;
                              }


                              // Calling data by where workers staff
                              public function call_all_workers_dashboard_data_by_where($table_name, $status, $emp_id, $value, $id){
                                    $this->db->select('*');
                                    $this->db->from($table_name);
                                    $this->db->where($status, $value);
                                    $this->db->where($emp_id, $id);
                                    $query = $this->db->get();
                                    return $query;
                              }



                              // Salary Info from Staff
                              public function get_all_salary_info($table_name, $emp_id, $id){
                                    $this->db->select('*');
                                    $this->db->from($table_name);
                                    $this->db->where($emp_id, $id);
                                    $query = $this->db->get();
                                    return $query;
                              }

                              // Send salary Request from here
                              public function send_salary_request($table_name, $data){
                                    $this->db->insert($table_name, $data);
                                    return true;
                              }

                              // Get all Leaves data where leave_id matches my session id
                              public function get_all_leaves_data_where_id_matches_my_session($table_name, $emp_id, $status, $value, $session_id){
                                    $this->db->select('*');
                                    $this->db->from($table_name);
                                    $this->db->where($status, $value);
                                    $this->db->where($emp_id, $session_id);
                                    $query = $this->db->get();
                                    return $query;
                              }

                              // Getting employee list to use in leave requests
                              public function get_employees_list($table_name){
                                    $this->db->select('*');
                                    $this->db->from($table_name);
                                    $query = $this->db->get();
                                    return $query;
                              }

                              // Sending a leave request from worker
                              public function send_leave_request_from_worker($table_name, $data){
                                    $this->db->insert($table_name, $data);
                                    return true;
                              }

                              // Canceling leave requests from worker
                              public function canceling_requests_from_me($table_name, $leave_id, $cancel_id){
                                    $this->db->where($leave_id, $cancel_id);
                                    $this->db->delete($table_name);
                                    return true;
                              }

                              // get all leaves data by emp id for worker
                              public function get_all_leaves_data_for_worker($table_name, $status, $value, $emp_id, $session_id){
                                    $this->db->select('*');
                                    $this->db->from($table_name);
                                    $this->db->where($status, $value);
                                    $this->db->where($emp_id, $session_id);
                                    $query = $this->db->get();
                                    return $query;
                              }
            
//----------------------------------------------------------------------------------------------------------------------------

                              // Call all loans data for me from here
                              public function get_all_loans_data_for_me($table_name, $status, $value, $emp_id, $session_id){
                                    $this->db->select('*');
                                    $this->db->from($table_name);
                                    $this->db->where($status, $value);
                                    $this->db->where($emp_id, $session_id);
                                    $query = $this->db->get();
                                    return $query;
                              }

                              // Call my name from employees list to use in loans request
                              public function get_my_name_from_employee_list($table_name){
                                    $this->db->select('*');
                                    $this->db->from($table_name);
                                    $query = $this->db->get();
                                    return $query;
                              }

                              // Request a loan for worker
                              public function request_loan_for_me($table_name, $data){
                                    $this->db->insert($table_name, $data);
                                    return true;
                              }


                              // Call all loans data for me from here
                              public function get_history_loans_data_for_me($table_name, $status, $value, $emp_id, $session_id){
                                    $this->db->select('*');
                                    $this->db->from($table_name);
                                    $this->db->where($status, $value);
                                    $this->db->where($emp_id, $session_id);
                                    $query = $this->db->get();
                                    return $query;
                              }


                              // get my salary requests for worker
                              public function get_my_salary_requests($table_name, $employee_id, $session_id, $emp_status, $value){
                                    $this->db->select('*');
                                    $this->db->from($table_name);
                                    $this->db->where($employee_id, $session_id);
                                    $this->db->where($emp_status, $value);
                                    $query = $this->db->get();
                                    return $query;
                              }


                              // Canceling Salary requests from worker
                              public function cancel_salary_requests($table_name, $employee_id, $cancel_id){
                                    $this->db->where($employee_id, $cancel_id);
                                    $this->db->delete($table_name);
                                    return true;
                              }

//--------------------------------------------------------------------------------------------------------------------

                              // Get all cv data by where
                              public function get_cv_data_for_worker_by_where($table_name, $emp_id, $session_id){
                                    $this->db->select('*');
                                    $this->db->from($table_name);
                                    $this->db->where($emp_id, $session_id);
                                    $query = $this->db->get();
                                    return $query;
                              }

                              // Uploade worker cv from here
                              public function upload_worker_cv_for_me($table_name, $data){
                                    $this->db->insert($table_name, $data);
                                    return true;
                              }
      }