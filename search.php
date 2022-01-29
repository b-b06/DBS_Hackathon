<!DOCTYPE html>
<html>
<head>
  <title>Display</title>
</head>
<body>

<h2>Details</h2>

<table border="2">
  <tr>
    <td>id</td>
    <td>fldName</td>
    <td>fldEmail</td>
    <td>fldPhone</td>
    <td>fldMessage</td>
  </tr>

<?php
$d = $_POST['id'];
//include "contact.php"; 
$con = mysqli_connect('localhost', 'root', '','dbcontact');
echo "select * from tblcontact where fldEmail=' ".$d."' "; 	
$records = mysqli_query($con,"select * from tblcontact where fldEmail='".$d."' "); // fetch data from database




while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['fldName']; ?></td>
    <td><?php echo $data['fldEmail']; ?></td>
    <td><?php echo $data['fldPhone']; ?></td>
    <td><?php echo $data['fldMessage']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($con); // Close connection ?>

</body>
</html>