
<?php
    //class for inserting data in database
    class INS
    {
        public function ins_receipt($rid,$client,$address,$phone,$pmtd,$purpose,$total,$amt,$bal,$writer,$fullDate,$date,$time){
            require("db/database_connection.php");

            $ins = $con->query("INSERT INTO receipts(ref_id,customer_name,customer_address,phone_no,pmtd,pur_pose,total_amt,amt_paid,amt_rem,writer_name,fullDay,date,time)VALUE('$rid','$client','$address','$phone','$pmtd','$purpose','$total','$amt','$bal','$writer','$fullDate','$date','$time')");

            return $ins;
        }
    }

   
    
?>