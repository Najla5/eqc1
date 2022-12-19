<?php
include 'addjobs_inc.php';
?>
<!DOCTYPE html>
<html>
 <meta charset="utf-8" />
<head>
<link rel="stylesheet" type="text/css" href="formStyle.css" />
<script defer src="include/‏‏validationJobs.js"></script>
</head>


<body>
  <div class="formCSS">
<h1>إضافة وظيفة</h1>
  <div id="error"></div>
  <form id="form" action="addjobs_inc.php" method="POST">

  <div class="inputName">
  <input  type="text"  id="jobName" name="jobName" placeholder="job name" required >
  <label>المسمى الوظيفي</label>
  </div>
  <div id="errorjobName"></div>
  <br>

  <div  class="inputqualification">
  <select name="qualification" id="qualification" required>
  <option value=""></option>
  <option value="Master">Master's</option>
  <option value="Bachelor">Bachelor</option>
  <option value="Diploma">Diploma</option>
  </select>
  <label>المؤهل</label>
  </div>
  <br>

  <div class="input-control">
  <textarea  id="experience" name="experience" required>
  </textarea>
  <label>الخبرات </label>
  </div>
  <div id="errorexperience"></div>
   <br>

  <div class="input-control">
  <input type="date"  id="sdate" name="sdate" placeholder="start date" required>
  </div>
  <br>
   <div id="errorsdate"></div>

   <div class="input-control">
   <input type="date"  id="edate" name="edate" placeholder="end date" required>
   </div>
   <br>
    <div id="erroredate"></div>

  <input type="submit"  id="submit" name="submit" value="إضافة">
  </form>
</div>
</body>
</html>
