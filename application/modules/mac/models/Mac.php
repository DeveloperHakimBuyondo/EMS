

<?php 

      class Mac extends CI_Model{
            // Costructor
            public function __construct(){
                parent:: __construct();
                $this->load->database();
            }

            // MAC Address Logic
            public function mac_logic($my_enc1, $my_enc2,$my_enc3, $my_enc4){

                $enc1['get'] = $this->db->get_where('mac_protector', array('mac_id' => 1))->row_array();
                $enc2['get'] = $this->db->get_where('mac_protector', array('mac_id' => 2))->row_array();
                $enc3['get'] = $this->db->get_where('mac_protector', array('mac_id' => 3))->row_array();

                // Active MAC Address goes here
                $encyption1 = $enc1['get']['mac_pro'];
                $encyption2 = $my_enc1.$enc2['get']['mac_pro'].$my_enc2;
                $encyption3 = $my_enc3.$enc3['get']['mac_pro'].$my_enc4;

                //Buffering the output
                ob_start();  
    
                //Getting configuration details 
                system('ipconfig /all');  
                
                //Storing output in a variable 
                $configdata=ob_get_contents();
                
                // Clear the buffer  
                ob_clean();  
                
                //Extract only the physical address or Mac address from the output
                $mac = "Physical";  
                $pmac = strpos($configdata, $mac);
                
                // Get Physical Address  
                $macaddr=substr($configdata,($pmac+36),17);

                    if($macaddr == $encyption1 ||$macaddr == $encyption2 || $macaddr == $encyption3){
                        return TRUE;
                    }else{
                        return TRUE;
                    }

                

            }
      }