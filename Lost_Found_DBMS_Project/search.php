<?php include 'config.php'; include 'navbar.php'; ?>
<div class="container mt-5">
<h4>Search</h4>
<form>
<input type="text" name="search" class="form-control mb-2" placeholder="Search">
</form>
<?php
if(isset($_GET['search'])){
$res=mysqli_query($conn,"SELECT * FROM items WHERE item_name LIKE '%$_GET[search]%'");
while($row=mysqli_fetch_assoc($res)){
echo "<div class='card p-2 mb-2'>{$row['item_name']} - {$row['location']}</div>";
}
}
?>
</div>