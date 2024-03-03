
<?php
    //class for selecting data in database
    class SEL
    {
        public function sel_log_admin($email,$pass) {
            require("db/database_connection.php");
            
            $sel = $con->query(" SELECT * FROM admin WHERE email = '$email' AND password = '$pass' ");
    
            return $sel;
            
        }   

        public function sel_log_admin_uname($uname,$pass) {
            require("db/database_connection.php");
            
            $sel = $con->query(" SELECT * FROM admin WHERE username = '$uname' AND password = '$pass' ");
    
            return $sel;
            
        }

        public function sel_recp($id){
            require("db/database_connection.php");
            
            $sel = $con->query(" SELECT * FROM receipts  WHERE ref_id = '$id'  ");
    
            return $sel;
        }

        public function sel_recp_all(){
            require("db/database_connection.php");
            
            $sel = $con->query(" SELECT * FROM receipts  ");
    
            return $sel;
        }

        public function sel_recp_bal($bal){
            require("db/database_connection.php");
            
            $sel = $con->query(" SELECT * FROM receipts WHERE amt_rem > '$bal' ");
    
            return $sel;
        }
    }



?>