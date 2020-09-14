<?php
require('db.php');
$status = "";
if(isset($_POST['new']) && $_POST['new'] && $_POST['new'] && $_POST['new']==1){
    $Date = $_REQUEST['Date'];
    $Name =$_REQUEST['Name'];
    $Venue = $_REQUEST['Venue'];
    $Description = $_REQUEST["Description"];
    $ins_query="insert into Events
    (`Date`,`Name`,`Venue`,`Description`)values
    ('$Date','$Name','$Venue','$Description')";
    mysqli_query($con,$ins_query);

    $status = "New Record Inserted Successfully.
    </br></br><a href='view.php'>View Inserted Event</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Event</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="form">
<p><a href="profile.php"> Profile </a> 
| <a href="view.php">View Records</a> 
| <a href="logout.php">Logout</a></p>
<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="Date" placeholder="Enter Event Date" required /></p>
<p><input type="text" name="Name" placeholder="Enter Event Name" required /></p>
<p><input type="text" name="Venue" placeholder="Enter Event Venue" required /></p>
<p><input type="text" name="Description" placeholder="Enter Description" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>