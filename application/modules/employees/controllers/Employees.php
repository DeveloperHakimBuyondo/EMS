
<?php

      class Employees extends Emp{
            public function __construct(){
                parent:: __construct();
            }

            // Call all Employees here
            public function index(){


            // Use This to block MAC Address from the controler
            $this->load->model('system/system_blocker');
            $mac_blocker = $this->system_blocker->get_real_mac_addr();

                if($mac_blocker === FALSE){
                    echo '<br><br><br><br><br><br><br><center><h1 style="color: red;">E.M.S Is Blocked Please Contact Developer</h1><a href="http://developerbuyondohakim.onlinewebshop.net">Here</a></center>';
                }else{

                                // Log push user out if not logged in
                                if(!$this->session->userdata('logged_in')){
                                    redirect('users/login');
                                }

                                // Log push user out if not logged in
                            if(!$this->session->userdata('user_access') == 1){
                                redirect('users/login');
                            }


                    $data['title'] = "Manage Employees";
                    $this->load->model('employees_mdl');
                    $data['get_employees_all_data'] = $this->employees_mdl->get_employees_data_by_where('employees', 'emp_status', 1);

                    $this->load->view('templates/header', $data);
                    $this->load->view('employees', $data);
                    $this->load->view('templates/footer');

                }
            }

            // Get all Employees mixed active and not active
            public function all_employees(){

            // Use This to block MAC Address from the controler
            $this->load->model('system/system_blocker');
            $mac_blocker = $this->system_blocker->get_real_mac_addr();

                if($mac_blocker === FALSE){
                    echo '<br><br><br><br><br><br><br><center><h1 style="color: red;">E.M.S Is Blocked Please Contact Developer</h1><a href="http://developerbuyondohakim.onlinewebshop.net">Here</a></center>';
                }else{

                                // Log push user out if not logged in
                                if(!$this->session->userdata('logged_in')){
                                    redirect('users/login');
                                }

                                // Log push user out if not logged in
                            if(!$this->session->userdata('user_access') == 1){
                                redirect('users/login');
                            }


                    $data['title'] = "Manage Employees / MIXED";
                    $this->load->model('employees_mdl');
                    $data['get_mixed_employees'] = $this->employees_mdl->get_employees_data('employees');

                    $this->load->view('templates/header', $data);
                    $this->load->view('employees/all', $data);
                    $this->load->view('templates/footer');

                }
            }

            // View Employee Record
            public function view($id = NULL){


            // Use This to block MAC Address from the controler
            $this->load->model('system/system_blocker');
            $mac_blocker = $this->system_blocker->get_real_mac_addr();

                if($mac_blocker === FALSE){
                    echo '<br><br><br><br><br><br><br><center><h1 style="color: red;">E.M.S Is Blocked Please Contact Developer</h1><a href="http://developerbuyondohakim.onlinewebshop.net">Here</a></center>';
                }else{

                                // Log push user out if not logged in
                                if(!$this->session->userdata('logged_in')){
                                    redirect('users/login');
                                }

                                // Log push user out if not logged in
                            if(!$this->session->userdata('user_access') == 1){
                                redirect('users/login');
                            }


                // $data['title'] = "Manage Employees";
                $this->load->model('employees_mdl');
                $data['employee'] = $this->employees_mdl->get_employees_data('employees', $id);
                $data['cv'] = $this->employees_mdl->get_loans_and_cv('cv_management', $id);
                $data['ln'] = $this->employees_mdl->get_loans_and_cv('loans', $id);

                    if(empty($data['employee'])){
                        die('Can not view Information');
                    }else{
                        $data['title'] = $data['employee']['emp_name'];

                        $this->load->view('templates/header', $data);
                        $this->load->view('employees/view', $data);
                        $this->load->view('templates/footer');
                    }
                }
            }

            // Add Employee here
            public function add(){

                                // Log push user out if not logged in
                                if(!$this->session->userdata('logged_in')){
                                    redirect('users/login');
                                }

                                // Log push user out if not logged in
                            if(!$this->session->userdata('user_access') == 1){
                                redirect('users/login');
                            }


                $data['title'] = "Manage Employees / Add";
                $this->load->model('employees_mdl');
                $data['education'] = $this->employees_mdl->get_employees_data('education');
                $data['departments'] = $this->employees_mdl->get_employees_data('departments');
                $data['countries'] = $this->employees_mdl->get_employees_data('countries');
                $emp['u_id'] = $this->employees_mdl->get_employees_data_by_id_desc('employees', 'emp_id');

                    // set Validation Rules
                    $this->form_validation->set_rules('emp_name', 'Employee Name', 'required');
                    $this->form_validation->set_rules('emp_date_of_birth', 'Date Of Birth', 'required');
                    $this->form_validation->set_rules('emp_date_of_joining', 'Date Of Joining', 'required');
                    $this->form_validation->set_rules('emp_nin', 'Employee NIN Number', 'required');
                    $this->form_validation->set_rules('emp_description', 'Employee Description', 'required');

                    $this->form_validation->set_rules('emp_phone', 'Employee Phone', 'required');
                    $this->form_validation->set_rules('emp_email', 'Employee Email', 'required');
                    // $this->form_validation->set_rules('emp_facebook', 'Employee Facebook', 'required');
                    // $this->form_validation->set_rules('emp_twitter', 'Employee Twitter', 'required');
                    // $this->form_validation->set_rules('emp_linkedin', 'Employee LinkedIn', 'required');
                    // $this->form_validation->set_rules('emp_instagram', 'Employee Instagram', 'required');
                    $this->form_validation->set_rules('emp_address', 'Employee Address', 'required');

                    $this->form_validation->set_rules('former_employer', 'Former Employer', 'required');
                    $this->form_validation->set_rules('former_employer_date_from', 'Former Employer Date From', 'required');
                    $this->form_validation->set_rules('former_employer_date_to', 'Former Employer Date To', 'required');

                    $this->form_validation->set_rules('emp_salary', 'Employee Salary', 'required');

                        if($this->form_validation->run() === FALSE){

                            $this->load->view('templates/header', $data);
                            $this->load->view('employees/add', $data);
                            $this->load->view('templates/footer');

                        }else{

                            // unlink("./assets/assets/images/employee_images/uploads");
                            //  Upload Employee Image 
                            $config['upload_path'] = "./assets/assets/images/employee_images/uploads";
                            $config['allowed_types'] = "jpg|jpeg|gif|png";
                            $config['max_size'] = "5000";
                            $config['max_width'] = "5000";
                            $config['max_height'] = "5000";

                                $this->load->library('upload', $config);
                                if(!$this->upload->do_upload()){
                                    $errors = array('error' => $this->upload->display_errors());
                                    $emp_image = "avt.png";
                                }else{
                                    
                                    $data = array('upload_data' => $this->upload->data());
                                    $emp_image = $_FILES['userfile']['name'];

                                }

                                // echo $data['employees']['emp_id'];
                                $this->load->model('employees_mdl');
                                $this->employees_mdl->add_employee('employees', $emp_image, $emp['u_id']['emp_id']);

                                // Set Flash Message
                                $this->session->set_flashdata('employee_add', 'Employee was added Successfully...');
                                redirect('ids/id');

                        }

            }

            // Upload Employee CV Here
            public function upload_cv(){

                                // Log push user out if not logged in
                                if(!$this->session->userdata('logged_in')){
                                    redirect('users/login');
                                }

                                // Log push user out if not logged in
                            if(!$this->session->userdata('user_access') == 1){
                                redirect('users/login');
                            }


                $data['title'] = "CV MANAGEMENT";
                $this->load->model('employees_mdl');
                $data['employees'] = $this->employees_mdl->get_employees_data_by_where('employees', 'emp_status', 1);

                    // Setting the form Validations 
                    $this->form_validation->set_rules('emp_id', 'Select an Employee', 'required');
                        if($this->form_validation->run() === FALSE){

                            $this->load->view('templates/header', $data);
                            $this->load->view('employees/upload_cv', $data);
                            $this->load->view('templates/footer');

                        }else{

                    //  Upload Employee CV
                    $cv['upload_path'] = "./assets/assets/images/employee_images/uploads/cv";
                    $cv['allowed_types'] = "pdf";
                    $cv['max_size'] = "8000";
                    $cv['max_width'] = "5000";
                    $cv['max_height'] = "5000";
                        
                        $this->load->library('upload', $cv);
                        if(!$this->upload->do_upload()){
                            $errors = array('error' => $this->upload->display_errors());
                            $emp_cv = "Employee CV";
                        }else{
                            $data = array('upload_data' => $this->upload->data());
                            $emp_cv = $_FILES['userfile']['name'];
                        }

                            $this->load->model('employees_mdl');
                            $this->employees_mdl->upload_emp_cv('cv_management',$emp_cv);

                            // Set Flash Message
                            $this->session->set_flashdata('cv_upload', 'CV was uploaded Successfully...');
                            redirect('employees');

                    }

            }

            // Edit Employee Information
            public function edit($id){

                                // Log push user out if not logged in
                                if(!$this->session->userdata('logged_in')){
                                    redirect('users/login');
                                }

                                // Log push user out if not logged in
                            if(!$this->session->userdata('user_access') == 1){
                                redirect('users/login');
                            }


                $this->load->model('employees_mdl');
                $data['edit_employee_data'] = $this->employees_mdl->get_employees_data('employees', $id);
                $data['education'] = $this->employees_mdl->get_employees_data('education');
                $data['departments'] = $this->employees_mdl->get_employees_data('departments');
                $data['countries'] = $this->employees_mdl->get_employees_data('countries');

                    if(empty($data['edit_employee_data'])){
                        die('Can not edit Information');
                    }

                    $data['title'] = strtoupper($data['edit_employee_data']['emp_name'].' - Employee');

                    $this->load->view('templates/header', $data);
                    $this->load->view('employees/edit', $data);
                    $this->load->view('templates/footer');
            }

            // Updating Employee Info here
            public function update($emp_image){

                                // Log push user out if not logged in
                                if(!$this->session->userdata('logged_in')){
                                    redirect('users/login');
                                }

                                // Log push user out if not logged in
                            if(!$this->session->userdata('user_access') == 1){
                                redirect('users/login');
                            }


                $this->load->model('employees_mdl');
                // $this->employees_mdl->update_employee_data();

                $config['upload_path'] = "./assets/assets/images/employee_images/uploads/";
                $config['allowed_types'] = "gif|jpeg|jpg|png";
                $config['max_size'] = "5000";
                $config['max_width'] = "5000";
                $config['max_height'] = "5000";

                    $this->load->library('upload', $config);
                    if(!$this->upload->do_upload()){
                        $errors = array('error' => $this->upload->display_errors());
                        $image = $emp_image;
                    }else{
                        $data = array('upload_data' => $this->upload->data());
                        $image = $_FILES['userfile']['name'];
                    }
                    $this->employees_mdl->update_employee_data('employees', 'emp_id', $image);

                    // Set Flash Message
                    $this->session->set_flashdata('employee_update', 'Employee Info was updated Successfully...');
                    redirect('employees');
            }

            // Resign Employee
            public function resign_employee($emp_id, $value){
                $data = array('emp_status' => $value);
                $this->db->where('emp_id', $emp_id);
                $this->db->update('employees', $data);
                redirect('employees');
            }

            // Delete employee record / row from here 
            public function delete($id){

                                // Log push user out if not logged in
                                if(!$this->session->userdata('logged_in')){
                                    redirect('users/login');
                                }

                                // Log push user out if not logged in
                            if(!$this->session->userdata('user_access') == 1){
                                redirect('users/login');
                            }

                                
                $this->load->model('employees_mdl');
                $this->employees_mdl->delete_employee_record('employees', 'emp_id', $id);

                // Set Flash Message
                $this->session->set_flashdata('employee_delete', 'Employee was deleted Successfully...');
                redirect('employees');
            }

            // Search employees by employee id from here
            public function search(){

                                // Log push user out if not logged in
                                if(!$this->session->userdata('logged_in')){
                                    redirect('users/login');
                                }
    
                                    // Log push user out if not logged in
                                if(!$this->session->userdata('user_access') == 1){
                                    redirect('users/login');
                                }

                $data['title'] = "Manage Employees";

                $this->load->model('employees_mdl');
                $data['get_employees_all_data'] = $this->employees_mdl->search_employee_id('employees', 'employee_id', 'emp_status', 1);

                $this->load->view('templates/header', $data);
                $this->load->view('employees', $data);
                $this->load->view('templates/footer');
            }
      }