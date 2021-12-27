<?php
  
  $header=$_REQUEST['header'];
  $headerImage=$_REQUEST['headerImage'];
  $content=$_REQUEST['content'];
  $contentImage=$_REQUEST['contentImage'];
  $read=$_REQUEST['read'];
  $category=(int)$_REQUEST['category'];
  $dat=date("Y-m-d");
  //echo "<br>" .$header;


   require "mysql_conn.php";
  
    $sql = "INSERT INTO Post  (Header,Content,HeaderImage,ContentImage,AverageTime,PostDate,SubjectId)VALUES ('$header', 
           '$content','$headerImage','$contentImage','$read',$dat,$category)";
    $conn->query($sql);
    
     if ($conn->query($sql) === TRUE) {
         header ("Location:https://bim457.online/19090700029/BlogProject/forms/adminPage.php");
    //echo "record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
          
  
?>