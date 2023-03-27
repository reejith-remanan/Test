<?php
include("header.php");
?>


<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>




<table class="table">
<tr>
<th>name</th><th>email</th><th>password</th>
</tr>

<?php
include("connection.php");
$select='select * from register';
$res=mysqli_query($con,$select);
while($row=mysqli_fetch_array($res))
{
	?>
	<tr>
	<td><?php echo $row['name'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><?php echo $row['password'];?></td>
</tr>
<?php
}
?>

</table>
<br>
<br>
<br>

<?php
include("footer.php");
?>