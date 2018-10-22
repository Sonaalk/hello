<?php
  
try {
    $conn = new PDO("sqlsrv:server = tcp:sonaal.database.windows.net,1433; Database = UniversityDB", "rootadmin", "sonaalkalra@321");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}




// connect to the database

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $id = $_POST['id'];
  $rollno = $_POST['rollno'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $cgpa = $_POST['cgpa'];
  $major = $_POST['major'];
  
  $sql = "Insert into TopStudents(id,rollno,firstname,lastname,avg_cgpa,major) values ($id,$rollno,$fname,$lname,$cgpa,$major)";
  try{
    $conn-> query($sql);
  }
  catch (Exception $e){
    print "$e";
  }
  header('location: register.php');
}
  
