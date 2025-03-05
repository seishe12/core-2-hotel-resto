<?php 
    include 'db.php';
    $sql = "SELECT * FROM `rpos_customers` ";
    $query = $connection->query($sql);

    echo "$query->num_rows";

?>