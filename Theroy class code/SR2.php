<?php 
include "config.php"; 
 
$success = $error = ""; 
 
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ 
    $student_name = $_POST["student_name"]; 
    $student_id = $_POST["student_id"]; 
    $email = $_POST["email"]; 
 
    if (empty($student_name) || empty($student_id) || empty($email)) 
    { 
        $error = "Please fill the form"; g
    } 
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    { 
        $error = "Please enter a valid email address"; 
    } 
    else 
    { 
        $sql = "INSERT INTO students(student_name, student_id, email) 
                VALUES ('$student_name', '$student_id', '$email')"; 
 
        if ($conn->query($sql) === TRUE) 
        { 
            $success = "Registration Done"; 
        } 
        else 
        { 
            $error = "Error: " . $conn->error; 
        } 
    } 
} 
?> 
 
<!DOCTYPE html> 
<html> 
<head> 
    <title>Student Registration</title> 
</head> 
<body> 
 
    <h2>Student Registration</h2> 
 
    <form method="post" action=""> 
        
        Student Name: <input type="text" name="student_name"><br><br> 
 
        Student ID: <input type="text" name="student_id"><br><br> 
 
        Email Address: <input type="email" name="email"><br><br> 
 
        <input type="submit" value="Register"> 
    </form> 
 
    <p style="color:green;"><?php echo $success; ?></p> 
    <p style="color:red;"><?php echo $error; ?></p> 
 
</body> 
</html>