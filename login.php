
<?php


try {
    $conn = new PDO("sqlsrv:server = tcp:sonaal.database.windows.net,1433; Database = UniversityDB", "rootadmin", "sonaalkalra@321");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
$rollno = $_POST['rollno'];
 $sql = "SELECT * FROM TopStudents where RollNo = $rollno ";
try{
$rows=$conn->query($sql);
}
catch(PDOException $r)
{
    echo "$r";
}
foreach ($rows as $row)
{
    $fname=$row['FirstName']  ;
    $lname=$row['LastName']  ;
    $roll=$row['RollNo']  ;
    $gpa=$row['Avg_CGPA']  ;
    $major=$row['Major']  ;
    }
echo" Your Name is : $fname $lname <br> <br> ";

echo" Your Roll no is : $roll <br> <br> ";

echo" Your Gpa is : $gpa <br> <br>" ;

echo " Your Major Proect is on : $major <br> <br>";
?>
