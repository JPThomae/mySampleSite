<?php
include 'db_connection.php';
$conn = OpenCon();
echo "Connected Successfully";

$result = mysqli_query($conn,"SELECT first_name, last_name FROM golfers LIMIT 2;");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['first_name'] . "</td>";
echo "<td>" . $row['last_name'] . "</td>";
echo "</tr>";
}
echo "</table>";


?>







<?php

 

$con = mysql_connect("localhost","root","");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

mysql_select_db("smart", $con);

$result = mysql_query("SELECT * FROM Form");

while($row = mysql_fetch_array($result))

  {

  echo $row['Id'] . " " . $row['name']. $row['Mobile']. $row['email'];

  echo "<br />";

  }

 

?>