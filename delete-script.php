<?php
include "config.php";
include_once "Common.php";
if (isset($_GET['recordId'])){
    $recordId = $_GET['recordId'];
    $common = new Common();
    $delete = $common->deleteRecordById($connection,$recordId);
    if ($delete){
        echo '<script>alert("Ticket Cancel Successful !")</script>';
        echo '<script>window.location.href="ViewFullStatus.php";</script>';
    }
}