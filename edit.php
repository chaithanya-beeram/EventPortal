<?php
require('db.php');

$id=$_REQUEST['id'];
$query = "SELECT * from Events where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Event</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="form">
<p><a href="profile.php">Profile</a> 
| <a href="insert.php">Insert New Event</a> 
| <a href="logout.php">Logout</a></p>
<h1>Update Event</h1>
<?php
if(isset($_POST['new']) && $_POST['new'] && $_POST['new'] && $_POST['new'] ==1)
{
$id=$_REQUEST['id'];
$Date =$_REQUEST['Date'];
$Name =$_REQUEST['Name'];
$Venue =$_REQUEST['Venue'];
$Description = $_REQUEST["Description"];
$update="update Events set Date='".$Date."',
Name='".$Name."', Venue='".$Venue."',
Description='".$Description."' where id='".$id."'";
mysqli_query($con, $update);
echo "Event Updated Successfully";
}

else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="Date" placeholder="Enter Date:" 
required value="<?php echo $row['Date'];?>" /></p>
<p><input type="text" name="Name" placeholder="Enter Name:" 
required value="<?php echo $row['Name'];?>" /></p>
<p><input type="text" name="Venue" placeholder="Enter Venue:" 
required value="<?php echo $row['Venue'];?>" /></p>
<p><input type="text" name="Description" placeholder="Enter Description:" 
required value="<?php echo $row['Description'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>