

<?php

      class Chat_mdl extends CI_Model{
            // Constructor
            public function __construct(){
                parent:: __construct();
                $this->load->database();
            }

            // Get Chat data from here
            public function get_chat_data($table_name, $column_name = FALSE, $id = FALSE, $table = FALSE){
                if($id === FALSE){
                    if(!$table_name == 'employees'){
                        $this->db->join('employees', 'employees.employee_id = workers_chat.sender_id');
                        $this->db->select('*');
                        $this->db->from($table_name);
                        $query = $this->db->get();
                        return $query;
                    }elseif($table_name === 'employees_chat'){

                        $query = $this->db->get_where($table, array($column_name => $id));
                        return $query->row_array();
                    }

                        $this->db->select('*');
                        $this->db->from($table_name);
                        $query = $this->db->get();
                        return $query;

                }
                $this->db->join('employees', 'employees.employee_id = workers_chat.receiver_id');
                $query = $this->db->get_where($table_name, array($column_name => $id, 'sender_id' => $this->session->userdata('employee_id')));
                return $query->row_array();
            }

                        // Get All Employees Data
                        public function get_employees_data($table_name, $id = FALSE){
                            if($id === FALSE){
                                
                                $this->db->select('*');
                                $this->db->from($table_name);
                                $query = $this->db->get();
                                return $query;
            
                            }
                                $query = $this->db->get_where($table_name, array('employee_id' => $id));
                                return $query->row_array();
                        }

            // Get Messages here
            public function get_messages($table_name,  $receiver_id = FALSE, $receiver = FALSE, $sender_id = FALSE, $session_sender = FALSE){
                // $content = array($receiver_id => $receiver, $sender_id => $session_sender);

                $this->db->join('employees', 'employees.employee_id = workers_chat.sender_id');
                $this->db->select('*');
                $this->db->from($table_name);
                $this->db->order_by('workers_chat_id');
                // $this->db->where($receiver_id, $receiver);
                // $this->db->or_where($sender_id, $session_sender);
                $query = $this->db->get();
                return $query;
            }

            // Update and get Employee status
            public function get_employee_status($table_name, $value){
                $data = array(
                    'chat_status' => $value,
                );
                $this->db->where('employee_id', $this->session->userdata('employee_id'));
                $this->db->update($table_name, $data);
                return true;
            }

            // Count Active Workers
            public function count_active_workers($table_name, $chat_status, $value){
                $this->db->select('*');
                $this->db->from($table_name);
                $this->db->where($chat_status, $value);
                $query = $this->db->get();
                return $query;
            }

            // Send Message from here
            public function send_message($table_name, $receiver_id, $chat_file){

                $message = $this->input->post('message');
                $file = $chat_file;
                if(empty($file) || $file === "aud"){
                    $content = $message;
                    $audio = 0;
                }else{
                    $content = $file;
                    $audio = 1;
                }

                $data = array(
                    'message' => $content,
                    'is_audio' => $audio,
                    'sender_id' => $this->session->userdata('employee_id'),
                );
                $this->db->insert($table_name, $data);
                return true;
            }

            // Delete Message from here
            public function delete_message($table_name, $get_chat_id, $chat_id, $get_sender_id, $session_id){
                $delete = array($get_chat_id => $chat_id, $get_sender_id => $session_id);

                    $this->db->where($delete);
                    $this->db->delete($table_name);
                    return true;
            }
      }