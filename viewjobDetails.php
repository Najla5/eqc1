<?php
include "conn.php";
?> 
<!DOCTYPE html>
<html>
<meta charset="utf-8" />
<head>
<script defer src="include/‏‏validationJobs.js"></script>
</head>
<body>
  <table>
    <tr>
      <th>
     job name
      </th>
      
      <th>
     Company name
      </th>  
      <th>
     city
      </th> 
      <th>
      qualification
      </th>
      <th>
      experience
      </th>
      <th>
      S_Date
      </th>
      <th>
      E_Date
      </th>  

</tr>

<?php

$idjob=$_GET['id'];
$companyName=$_GET['id2'];
$city=$_GET['id3'];

$sql = "SELECT * FROM `job` WHERE `id_job` = $idjob";
    
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while ($row= $result->fetch_assoc()) {
  $jobName = $row['jobName'];
  $qualification = $row['qualification'];
  $experience = $row['experience'];
  $S_Date = $row['S_Date'];
  $E_Date = $row['E_Date'];
}
}

            echo'<tr>';
            echo '<td>'.$jobName.'</td>';
            echo '<td>'.$companyName.'</td>'; 
            echo '<td>'.$city.'</td>';
            echo '<td>'.$qualification.'</td>';
            echo '<td>'.$experience.'</td>';
            echo '<td>'.$S_Date.'</td>';
            echo '<td>'.$E_Date.'</td>';
            echo '</tr>';
               
?>
</body>
</html>



