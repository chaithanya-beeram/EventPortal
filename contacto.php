<?php
$host = "localhost";
$username="cpb9792_root";
$dbName = "cpb9792_test";
$pnumber = isset($_POST['pnumber']);
$email = isset($_POST['email']);
$Asunto =  isset($_POST['Asunto']);
$descripcion = isset($_POST['descripcion']);

// Create database connection
$conn = new mysqli($host,$username,"chaithuB2316.",$dbName);
// Check connection
if ($conn->connect_error)
 {
die("Connection failed:".$conn->connect_error);
}
else
{
	$a=$conn->prepare("insert into Contacts(pnumber,email,Asunto,descripcion) values(?,?,?,?)");
	$a->bind_param("ssss",$pnumber,$email,$Asunto,$descripcion);
    $a->execute();
    mail("b.chaithanya.prasad@gmail.com","subject",$descripcion);
    echo "connection successful <br>";
    //header("Location:contactmea.php");
    echo "You'll be Contacted Soon";
}

?>