

<?php

      class Worker_cv extends Emp{
            // Constructor
            public function __construct(){
                parent:: __construct();
            }

            // CV
            public function index(){
                $data['title'] = "Upload your CV";
                $this->load->model('cv_mdl');
                
                $this->load->view('workers_templates/header', $data);
                $this->load->view('workers/cv', $data);
                $this->load->view('workers_templates/footer');
            }




            // Upload Employee CV Here
            public function upload_cv(){

                // Log push user out if not logged in
                if(!$this->session->userdata('worker_logged')){
                    redirect('users/worker_login');
                }

                $this->load->model('cv_mdl');
                $data['cv'] = $this->cv_mdl->get_cv_data_by_where('cv_management', 'emp_id')->num_rows();

                
                    if($data['cv'] > 0){

                    // Set Flash Message
                    $this->session->set_flashdata('cv_not_uploaded', 'Failed: sorry you already have a CV Uploaded...');
                    redirect('workers/worker_cv');

                    }else{

                    //  Upload Employee CV
                    $cv['upload_path'] = "./assets/assets/images/employee_images/uploads/cv";
                    $cv['allowed_types'] = "pdf";
                    $cv['max_size'] = "8000";
                    $cv['max_width'] = "1200";
                    $cv['max_height'] = "1200";
                    
                    $this->load->library('upload', $cv);
                    if(!$this->upload->do_upload()){
                        $errors = array('error' => $this->upload->display_errors());
                        $emp_cv = "Employee CV";
                    }else{
                        $data = array('upload_data' => $this->upload->data());
                        $emp_cv = $_FILES['userfile']['name'];
                    }

                        $this->load->model('cv_mdl');
                        $this->cv_mdl->upload_worker_cv('cv_management',$emp_cv);

                        // Set Flash Message
                        $this->session->set_flashdata('worker_cv_upload', 'CV was uploaded Successfully...');
                        redirect('workers/worker_cv');

                }

        }
      }