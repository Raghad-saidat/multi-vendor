<?php
// update_status.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order_id = $_POST['order_id'];
    $new_status = $_POST['new_status'];

    // SQL: UPDATE orders SET status = '$new_status' WHERE id = '$order_id'
    
    // Redirect back to orders page
    header("Location: orders.php?msg=updated");
}
?>