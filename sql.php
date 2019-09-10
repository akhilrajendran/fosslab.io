<?php
   $name=$_POST['your_name'];
   $email=$_POST['your_email'];
   $course=$_POST['your_course'];
   $comments=$_POST['comments'];
   echo "name is:-";
   echo $name;
   echo '<br>';
   echo "email is:-";
   echo $email;
   echo '<br>';
   echo "course is:-";
   echo $course;
   echo '<br>';
   echo "comments is:-";
   echo $comments;

 $servername = "localhost";
 $username = "root";
 $password = "rajendran123";
 $dbname="student";
// Create connection
 $conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql = "INSERT INTO feedback(Name,email,course,comment)
VALUES('$name','$email','$course','$comments')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
