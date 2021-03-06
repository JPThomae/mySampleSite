<!DOCTYPE html>

<html>
  <head>
    <link href="site.css" type="text/css" rel="stylesheet">  
    <title>RGA League - Home</title>  <!-- Title is shown in the tab bar -->
    <!-- Logo and navbar will also go here -->
  </head>

  <body>
    <header>  <!-- Header with logo or title and navigation menu -->
    
    </header>
    <!-- Hero image -->
      <div class="hero-image">         
        <section> <!-- Navigation -->
          <br>
          <table class="nav">
            <tr>
              <td style="width:5%"> <img src="images/logo.png" width=100 height=40 align="left"/></td>
              <td><h4> Home </h4></td>
              <td><h4><a href="./schedule.php"> Schedule </a></h4></td>
              <td><h4><a href="./stats.php"> Stats </a></h4></td>
              <td><h4><a href="./handicaps.php"> Handicaps </a></h4></td>
              <td><h4><a href="./info.php"> Info </a></h4></td>
            </tr>  
          </table>
        </section>
            <br>
          <div class="welcome_text" style="float: left">
              <br>
              <br>
              <br>
              <h2> RGA Golf League 
                 <br> The Premier League of Rolling Hills  </h2>
        
        
           <h4> Bringing the league to you with weekly 
        <br> stats, events, schedules
        <br> and more... </h4>
          </div>
      
    <section>
        
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
            <th colspan='2'>League Standings</th>  
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

CloseCon($conn);
?> 
    </section>  
          
      <br>
      <br>
      <br>
      <br>
      <br>
          
    <section>
      <table class="greenTable2" style="float: right">
          <br>
        <thead>
          <tr>
            <th colspan="3">Last Week's Results</th>  
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="3">date</td>
          </tr>
          <tr>
            <td>Team 1</td>
            <td>vs.</td>
            <td>Team 2</td>
          </tr>
          <tr>
            <td>0</td>
            <td></td>
            <td>0</td>
          </tr>
          <tr>
            <td>Team 3</td>
            <td>vs.</td>
            <td>Team 4</td>
          </tr>
          <tr>
            <td>0</td>
            <td></td>
            <td>0</td>
          </tr>
          <tr>
            <td>Team 5</td>
            <td>vs.</td>
            <td>Team 6</td>
          </tr>
          <tr>
            <td>0</td>
            <td></td>
            <td>0</td>
          </tr>
          <tr>
            <td>Team 7</td>
            <td>vs.</td>
            <td>Bye</td>
          </tr>
          <tr>
            <td>0</td>
            <td></td>
            <td>0</td>
          </tr>
        </tbody>
      </table>  
    </section>  
     
      </div>
      
      <div class="footer">   
          <table class="nav2">
            <tr>
              <td><h5><a href="./schedule.php"> Schedule </a></h5></td>
              <td><h5><a href="./stats.php"> Stats </a></h5></td>
              <td><h5><a href="./handicaps.php"> Handicaps </a></h5></td>
              <td><h5><a href="./info.php"> Info </a></h5></td>
            </tr>  
          </table>
        
      </div>
      
    <p></p>
    
  </body>

</html>