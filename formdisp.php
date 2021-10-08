<html>
<head>
<title>Submitted Response</title>
<link rel="stylesheet" type="text/css" href="./style.css"/>
</head>
<body>
<h1>Response</h1>
<table align="center" border="2" class="unstyledTable">
<tr>
<td>ID</td>
<td>First Name</td>
<td>Last Name</td>
<td>College</td>
<td>Address</td>
<td>Email</td>
<td>Mobile</td>
<td>Graduate date</td>
<td>Question</td>

</tr>

<?php
$conn=new mysqli('localhost','root','','campusreg');
if($conn->connect_error)
{
die('connection failed : '.$conn->connect_error);
}
$con="SELECT * from  data";
$res=$conn->query($con);
if($res->num_rows>0)				// here num rows is used to check no of rows of output query.
	{
	while($row=$res->fetch_assoc())
	{
		echo "<tr>
			<td>".$row["id"]."</td>		
			<td>".$row["firstname"]."</td>
			<td>".$row["lastname"]."</td>
			<td>".$row["college"]."</td>
			<td>".$row["address"]."</td>
			<td>".$row["email"]."</td>
			<td>".$row["mob"]."</td>
			<td>".$row["graduatedate"]."</td>
			<td>".$row["ques"]."</td>
			
										
			</tr>";
		}	
	echo"</table>";
	}
		
?>

</br></br>
<form align="center"><button onClick="window.print()">Print</button></form></br></br>


</body>
</html>