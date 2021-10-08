<html>
<body>
<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$college=$_POST['college'];
$address=$_POST['address'];
$email=$_POST['email'];
$mob=$_POST['mob'];// passing each value from form to the variables.
$graduatedate=$_POST['graduatedate'];
$ques=$_POST['ques'];


// establishing connection with the database on the xampp server.
// campusreg is name of database on the localhost present.root is username and password is ''.
$conn= new mysqli('localhost','root','','campusreg');            // making query to connect database.

if($conn->connect_error)
{
    die('connection failed : '.$con->connect_error); // if error of connection then it will show error.
}
else
{

    $stmt=$conn->prepare("INSERT INTO data(firstname,lastname,college,address,email,mob,graduatedate,ques)VALUES(?,?,?,?,?,?,?,?)");  // data is name of table in the database.
    $stmt->bind_param("sssssiss",$firstname,$lastname,$college,$address,$email,$mob,$graduatedate,$ques);
    $stmt->execute();
    echo "You have Succesfully registered . If you are Selected then we will contact you...";

    $stmt->close();
    $conn->close();
}
?>
</br></br>
<form action="formdisp.php" align="center"><button type="submit" value="submit">View</button></form></br></br>
</body>
</html>