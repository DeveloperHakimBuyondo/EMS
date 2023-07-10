

<?php 

      class System_blocker extends CI_Model{
            // Constructor
            public function __construct(){
                parent:: __construct();
                // $this->load->database();
            }

            // Blocking System by MAC Address
            public function get_real_mac_addr(){
                // Calling system model
                $my_enc1="";
                $my_enc2="";
                $my_enc3="";
                $my_enc4="";
                $this->load->model('mac/mac');
                $mac = $this->mac->mac_logic($my_enc1, $my_enc2,$my_enc3, $my_enc4);
                
                if($mac === FALSE){
                    return FALSE; 
                }else{
                    return TRUE; 
                }
                //Display Mac Address  
                // return $macaddr; 

            // Use This to block MAC Address from the controler
            $this->load->model('system/system_blocker');
            $mac_blocker = $this->system_blocker->get_real_mac_addr();

                if($mac_blocker === FALSE){
                    echo '<br><br><br><br><br><br><br><center><h1 style="color: red;">E.M.S Is Blocked Please Contact Developer</h1><a href="http://developerbuyondohakim.onlinewebshop.net">Here</a></center>';
                }else{}
                
                
            }


      }