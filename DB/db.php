<?php 
include "config.php"; 
 
$success = $error = ""; 
 
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ 
    $username = $_POST["username"]; 
    $password = $_POST["password"]; 
    $email = $_POST["email"]; 
    $department = $_POST["department"]; 
    $age = $_POST["age"]; 
 
    if (empty($username) || empty($password) || empty($email) || empty($department) || empty($age)) 
    { 
        $error = "Please fill the form"; 
    } 
    else 
    { 
        $sql = "INSERT INTO registration(username, password, email, department, age) 
                VALUES ('$username', '$password', '$email', '$department', '$age')"; 
 
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
    <title>User Registration</title> 
</head> 
<body> 
 
    <h2>Register</h2> 
 
    <form method="post" action=""> 
        Username: <input type="text" name="username"><br><br> 
 
        Password: <input type="password" name="password"><br><br> 
 
        Email: <input type="email" name="email"><br><br> 
 
        Department: <input type="text" name="department"><br><br> 
 
        Age: <input type="number" name="age"><br><br> 
 
        <input type="submit" value="Register"> 
    </form> 
 
    <p style="color:green;"><?php echo $success; ?></p> 
    <p style="color:red;"><?php echo $error; ?></p> 
 
</body> 
</html>