<?php 
session_start(); 
 include_once "header.php"; 
 ?> 
 
<?php 
include_once 'dbconnnect.php';
if(isset($_POST['submit'])) 
{     
      
 $file = rand(1000,100000)."-".$_FILES['file']['name']; 
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size']; 
 //echo $file_size; 
 $file_type = $_FILES['file']['type']; 

 $folder="uploads/"; 
  
 // new file size in KB 
 $new_size = $file_size/1024; 
 echo $new_size;   
 // new file size in KB 
  
 // make file name in lower case 
 $new_file_name = strtolower($file); 
 // make file name in lower case 
  
 $final_file=str_replace(' ','-',$new_file_name); 
  
 if(move_uploaded_file($file_loc,$folder.$final_file)) 
 { 
  $sql="INSERT INTO tbl_uploads(file,type,size) VALUES('$final_file','$file_type','$new_size')"; 
  $_SESSION['final_file']=$final_file; 
  mysqli_query($connection,$sql); 
     
     
 
 } 
     <?php
      
            <script>
  alert('successfully uploaded'); 
        window.location.href='emp_master.php?success'; 
        </script> 
 
  ?> 
 else 
 { }
  ?> 