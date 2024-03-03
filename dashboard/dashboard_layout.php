<!-- this is the dashboard for navigation across all pages -->
<?php 
    @session_start();
    if(!isset($_SESSION['id'])){
        echo "<script>window.location='../'</script>";
    }
?>

<script src="../js/dash.js"></script>

<div  id="peon" >&#9776;</div>

<div class="dashboard">
    <div id="losec">&times;</div>
    

    <img src="../image/dash_logo.png" class="dash-logo">

    
    <div class="dash-b">
        <a href="index.php">
            <span>
                <img src="../image/home.svg"  class="fir-img"><img src="../image/lhome.svg" class="sec-img" >CONTROL CENTRE
            </span>
        </a>
    </div>

    <div class="dash-b">
        <a href="make_receipt.php">
            <span>
                <img src="../image/create-fill.svg"  class="fir-img"><img src="../image/create.svg" class="sec-img" >CREATE RECEIPT
            </span>
        </a>
    </div>

    <div class="dash-b">
        <a href="view_receipts.php">
            <span>
            <img src="../image/view-fill.svg"  class="fir-img"><img src="../image/view.svg" class="sec-img">VIEW RECEIPTS
            </span>
        </a>
    </div>



    <div class="dash-b">
        
            
        <button onclick="if(window.confirm('Are you sure want to log out of this page')){window.location='../';}">
            <span>
                <img src="../image/box_log(2).svg"  class="fir-img"><img src="../image/box_log.svg" class="sec-img">LOG OUT
            </span>
        </button>

        
    </div>
    
</div>