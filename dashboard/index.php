<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css" media="all">
    <link rel="stylesheet" href="../css/repStyle.css" media="all">
    <script src="../js/jquery.js"></script>
    <script src="../js/snd_dash.js"></script>
    <title>Dashboard</title>
</head>
<body class="imgBody">
    <!-- This page is the welcome page showing no. of all receipts and balances -->
    <?php
        require("dashboard_layout.php");
    ?>

    <section class="main-div-container">
        <div class="sec-div-container">

            <?php
                require("../class/sel_class.php");
                $sel_ob = new SEL();
                $selr = $sel_ob->sel_recp_all();
            ?>
            <h1>CONTROL CENTRE</h1>
            <div class="contrl-div-con">
                <div class="fst-contrl-div-con">
                    <div class="inner-fcdc">
                        <h3>TOTAL RECEIPTS MADE</h3>
                        <p><?php echo mysqli_num_rows($selr); ?></p>
                    </div>

                    <?php
                        $bal = 0;
                        $selq = $sel_ob->sel_recp_bal($bal);
                    ?>
                    <div class="inner-fcdc">
                        <h3>TOTAL RECEIPTS MADE WITH BALANCE</h3>
                        <p><?php echo mysqli_num_rows($selq); ?></p>
                    </div>
                </div>

                <div class="snd-contrl-div-con">
                    <a href="make_receipt.php"><button>MAKE RECEIPT</button></a>
                    <a href="view_receipts.php"><button>VIEW RECEIPTS</button></a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>