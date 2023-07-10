


<form method="post" action="<?php echo base_url();?>dashboard/pro_mac" class="was-validated" enctype="multipart/form-data">
<input type="text" name="mac" required>
<input type="submit" value="<->">
</form>

<?php 

    $ip = $this->input->ip_address();
    echo $ip;

    echo "<br>";


                    //Buffering the output
                    ob_start();  
    
                    //Getting configuration details 
                    system('ipconfig');  
                    
                    //Storing output in a variable 
                    $configdata=ob_get_contents();
                    
                    // Clear the buffer  
                    ob_clean();  
                    
                    //Extract only the IP address or from the output
                    $ip = "IPv4";  
                    $pip = strpos($configdata, $ip);
                    
                    // Get Physical Address  
                    $ip_address=substr($configdata,($pip+36),17);

                    echo $ip_address."- is the connected IP";
?>