<?php 
    include 'db.php';
    $sql = "SELECT SUM(pay_amt) FROM rpos_payments ";
    // $query = $connection->query($sql);
    $amountsum = mysqli_query($connection, $sql) or die(mysqli_error($sql));
        $row_amountsum = mysqli_fetch_assoc($amountsum);
        $totalRows_amountsum = mysqli_num_rows($amountsum);
    echo $row_amountsum['SUM(pay_amt)'];


?>