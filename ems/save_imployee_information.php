<?php

$con = mysqli_connect('localhost','root','','employee_management');

$id = $_POST['eid'];
$pass = $_POST['ep'];
$name = $_POST['en'];
$age = $_POST['ea'];
$salary= $_POST['es'];
$gender = $_POST['gender'];
$country = $_POST['country'];

//Add Image in php

$image = $_FILES['image']['name'];
$imgcopy = $_FILES['image']['tmp_name'];
move_uploaded_file($imgcopy,"images/$image");

//Add Image in php
$image = $_FILES['image']['name'];
$imgcopy = $_FILES['image']['tmp_name'];
move_uploaded_file($imgcopy,"images/$image");

echo "Employee Name :".$name."<br>";
echo "Employee Pass :".$pass."<br>";
echo "Employee ID :".$id."<br>";
echo "Employee Age :".$age."<br>";
echo "Employee Salary :".$salary."<br>";
echo "Employee Gender :".$gender."<br>";
echo "Employee Country :".$country."<br>";

 ?>
