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
<th>image</th>
</tr>

<?php
include("connection.php");
$select='select * from upload';
$res=mysqli_query($con,$select);
while($row=mysqli_fetch_array($res))
{
	?>
	<tr>
	<td><img src="uploads/<?php echo $row['image'];?>" alt="Image" class="img-fluid"></td>
	
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