<?php
include_once "db.php";
include_once "header.php";

if (isset($_GET['reservation'])){
    include_once "reservation.php";
}

include_once "footer.php";