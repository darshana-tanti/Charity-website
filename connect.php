<?php
     
     $name= $_POST['name'];
     $email=$_POST['email'];
     $subject= $_POST['subject'];
     $message= $_POST['message'];

     //Database connection
    $conn= new mysqli('localhost','root','','charity');
    if($conn->connect_error){
         die('Connection Failed :'.$conn->connect_error);
    }else{
        $stmt=$conn->prepare("insert into support(name,email,subject,message)values(?,?,?,?)");
        $stmt->bind_param("sssssi",$name,$email,$subject,$message);
        $stmt->execute();
        echo "feedback sucessfull...!";
        $stmt->close();
        $conn->close();
    }








?>