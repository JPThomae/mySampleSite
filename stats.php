<!DOCTYPE html>

<html>
  <head>
    <link href="site.css" type="text/css" rel="stylesheet">  
    <title>RGA League - Stats</title>  <!-- Title is shown in the tab bar -->    
  </head>
    
     <!-- Hero image -->
         
    <div class="hero-image">
      <br>
  <section> <!-- Navigation -->
    <table class="nav">
        <tr>
          <td style="width:5%"> <img src="images/logo.png" width=100 height=40 align="left"/></td>
          <td><h4><a href="./homepage.php"> Home </a></h4></td>
          <td><h4><a href="./schedule.php"> Schedule </a></h4></td>
          <td><h4> Stats </h4></td>
          <td><h4><a href="./handicaps.php"> Handicaps </a></h4></td>
          <td><h4><a href="./info.php"> Info </a></h4></td>
        </tr>  
      </table>
  </section>  
        
  <section>

      <!-- testing standings table --> 
<?php
    include 'db_connection.php';
    $conn = OpenCon();
      
    $standings = mysqli_query($conn, "SELECT team, total_points from teams order by 2 desc;");

    echo "<table class='greenTable' style='float: right'>
          <br>
          <br>
          <br>
        <thead>
          <tr>
            <th colspan='2'>Test Standings Table</th>  
          </tr>
          <tr>
          <th>Team</th>
          <th>Points</th>
          </tr>
        </thead>";
      
    while($row = mysqli_fetch_array($standings))
    {
    echo "<tr>";
    echo "<td>" . $row['team'] . "</td>";
    echo "<td>" . $row['total_points'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
      
      
    $standings = mysqli_query($conn, "SELECT team, week1 as week, date1 FROM teams ORDER BY 3 asc;");
      
     echo "<table class='greenTable2' style='float: right'>
          <br>
        <thead>
          <tr>
            <th colspan='3'>Last Week's Results</th>  
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan='3'>date</td>
          </tr>";
      
    while($row = mysqli_fetch_array($standings))
    {
    echo "<tr>";
    echo "<td>" . $row['team'] . "</td>";
    echo "<td> vs. </td>";
    echo "<td>" . $row['team'] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>" . $row['week'] . "</td>";
    echo "<td></td>";
    echo "<td>" . $row['week'] . "</td>";
    }
    echo "</table>";
      
CloseCon($conn);
?>       
       
  </section>
      
          
    
    </div>
    
</html>