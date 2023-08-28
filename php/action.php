<?php
include('connection.php');

if (isset($_POST['id_order'])) {
    $id = $_POST['id_order'];
    $sql = "SELECT * FROM order_item WHERE id_order=$id";

    $order = $conn->query($sql);

    var_dump(mysqli_fetch_array($order));
}
?>