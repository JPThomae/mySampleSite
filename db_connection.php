<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "thomaej";
 $dbpass = "otbu+1";
 $db = "mysamplesitedb";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   


function OpenCon2()
 {
 $dbhost = "localhost";
 $dbuser = "thomaej";
 $dbpass = "otbu+1";
 $db = "mysamplesitedb";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon2($conn)
 {
 $conn -> close();
 }

?>