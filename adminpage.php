<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Feedback Details</title>
    <link rel="stylesheet" href="css/styles2.css" />
  </head>

  <body>
    <form action="php/logout.php" method="POST">
      <div class="logout">
        <input type="submit" value="Log Out" name="logout" />
      </div>
    </form>

    <?php 
      session_start();
      require 'php/config.php';

      if (isset($_SESSION['login_user'])) {
        $userLoggedIn = $_SESSION['login_user'];
        $result = mysqli_query($con,"SELECT * FROM feedback");

        echo "<table border='1' id='students-table'>
                <tr>
                    <th>Year</th>
                    <th>Sem</th>
                    <th>Date</th>
                    <th>Branch</th>
                    <th>Section</th>
                    <th>Subject</th>
                    <th>Ques-1</th>
                    <th>Ques-2</th>
                    <th>Ques-3</th>
                    <th>Ques-4</th>
                    <th>Ques-5</th>
                    <th>Ques-6</th>
                    <th>Ques-7</th>
                    <th>Ques-8</th>
                    <th>Remarks</th>
                </tr>";

        while($row = mysqli_fetch_array($result)) {
          echo "<tr>";
          echo "<td>" . $row['year'] . "</td>";
          echo "<td>" . $row['sem'] . "</td>";
          echo "<td>" . $row['date'] . "</td>";
          echo "<td>" . $row['branch'] . "</td>";
          echo "<td>" . $row['section'] . "</td>";
          echo "<td>" . $row['subject'] . "</td>";
          echo "<td>" . $row['ques1'] . "</td>";
          echo "<td>" . $row['ques2'] . "</td>";
          echo "<td>" . $row['ques3'] . "</td>";
          echo "<td>" . $row['ques4'] . "</td>";
          echo "<td>" . $row['ques5'] . "</td>";
          echo "<td>" . $row['ques6'] . "</td>";
          echo "<td>" . $row['ques7'] . "</td>";
          echo "<td>" . $row['ques8'] . "</td>";
          echo "<td>" . $row['remarks'] . "</td>";
          echo "</tr>";
        }

        echo "</table>";                                                                    
      }
      else {
        //header("Location: index.php");
      }
    ?>
  </body>
</html>
