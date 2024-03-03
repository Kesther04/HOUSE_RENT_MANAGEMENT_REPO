<?php

    require("database_connection.php");

    //to create the database
    $db = $con->query("CREATE DATABASE if not exists house_rent_db");
    if ($db) {
        echo "Database created";
    }

    //to create table for the registration of the admin
    $login_tb = $con->query("CREATE TABLE if not exists admin
    (id int(100)not null primary key auto_increment,
    username varchar(120)not null,
    email varchar(120)not null,
    password  varchar(120)not null,
    phone_no varchar(12)not null)ENGINE=innoDB");
    if ($login_tb) {
        echo "<p>table created</p>";
    }else {
        echo "<p>table not created</p>";
    }



    //for creating table for recording receipts
    $recp_tb = $con->query("CREATE TABLE if not exists receipts
    (id int(100)not null primary key auto_increment,
    ref_id int(100)not null,
    customer_name varchar(200)not null,
    customer_address text not null,
    phone_no varchar(100)not  null,
    pmtd varchar(120)not null,
    pur_pose text not null,
    total_amt text not null,
    amt_paid text not null,
    amt_rem text not null,
    writer_name varchar(200)not null,
    fullDay varchar(20)not null,
    date varchar(20)not null,
    time varchar(20)not null)ENGINE=innoDB");
    if ($recp_tb) {
        echo "Receipt_tb Created";
    }else {
        echo "Receipt_tb Not Created";
    }

?>