<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $to = "michaelparkermediafl@gmail.com";
        $email_subject = "New Form submission";

        $submission = "Name: ".$name."\n"."Message: ".$message;
        $header = "From: ".$email;
            
        mail($to, $subject, $message, $header);
    }
 ?>  