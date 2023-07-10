
<?php

      class Notifications extends Emp{
            // Constructor
            public function __construct(){
                parent:: __construct();
            }

            // Load all Notifications from here
            public function load_notifications(){
                $data['test'] = "Hello Testing";
                $this->load->model('notifications_mdl');
                $data['notifications'] = $this->natifications_mdl->get_all_notifications('departments');

                $this->load->view('staff_templates/header', $data);
            }
      }