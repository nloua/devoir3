<?php include 'db_connect_params.php';

$sql = "SELECT heading, tripdate, duration,summary FROM adventures";
            $result = $conn->query($sql);
?>