<?php 
    include 'db.php';
    $sql = "SELECT * FROM rpos_orders WHERE order_status = '' ";
    $query = $connection->query($sql);

    echo "$query->num_rows";

?>