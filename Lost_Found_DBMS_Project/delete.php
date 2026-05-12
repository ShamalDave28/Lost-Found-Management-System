<?php include 'config.php';
mysqli_query($conn,"DELETE FROM items WHERE id='$_GET[id]'");
header("Location: view_items.php");
?>