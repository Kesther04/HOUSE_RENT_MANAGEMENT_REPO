
<?php
    //class for deleting data in database
   
    class  DEL
    {
        public function del_recp($id){
            require("db/database_connection.php");
    
            $del = $con->query("DELETE FROM receipts WHERE id = '$id' ");
    
            return $del;
        } 
    }
    
?>