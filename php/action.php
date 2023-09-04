<?php
include('connection.php');

if (isset($_POST['id_order'])) {
    $id = $_POST['id_order'];
    $sql = "SELECT * FROM order_item WHERE id_order=$id";

    $order = $conn->query($sql);
    
}

if (isset($_POST['buy'])) {
    $id_coffee = $_POST['buy'];
    $sql = "SELECT * FROM coffee WHERE id_coffee=$id_coffee";

    $query = "INSERT INTO order_item ()";
}
?>