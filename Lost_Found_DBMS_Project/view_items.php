<?php include 'config.php'; if(!isset($_SESSION['user'])) header("Location: login.php"); ?>
<?php include 'navbar.php'; ?>
<div class="container mt-5">
<h4>Your Items</h4>
<table class="table table-bordered">
<tr><th>Item</th><th>Type</th><th>Location</th><th>Action</th></tr>
<?php
$res=mysqli_query($conn,"SELECT * FROM items WHERE user_id='".$_SESSION['user_id']."'");
while($row=mysqli_fetch_assoc($res)){
echo "<tr><td>{$row['item_name']}</td><td>{$row['type']}</td><td>{$row['location']}</td>
<td><a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a></td></tr>";
}
?>
</table></div>