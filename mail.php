<?php
    
    if (isset($_POST["email"] && $_POST["email"] != " ")){
        $fname = $_POST["name"];
        $email = $_POST["email"];
        $lname = $_POST["subject"];
        $message = $_POST["message"];

        $to = "mitpatel9828@gmail.com"; 

        $body = "User Message \n"; 
        $body .= " \n\n\t Name: ".$name;
        $body .= " \n\n\t Email: ".$email;
        $body .= " \n\n\t Subject: ".$subject;
        $body .= " \n\n\t Message: ".$message;
        
        if(mail($to, $subject, $body, $headers)){
            echo '<label class="success">Sent your <b>e-mail.</b></label>';
        }else{
            echo '<label class="error">Something went wrong! please try again.</label>';
        }

    }
    
    
    
    // $to = "mitpatel9828@gmail.com"; 
    // $from = $_SERVER['PHP_SELF']." ".$_POST["email"];
    // $fname = $_POST["name"];
    // $email = $_POST["email"];
    // $lname = $_POST["subject"];
    // $headers = "From: $from";
    // $message = $_POST["message"];

    // $body = "User Message \n"; 
    // $body .= " \n\n\t Name: ".$name;
    // $body .= " \n\n\t Email: ".$email;
    // $body .= " \n\n\t Subject: ".$subject;
    // $body .= " \n\n\t Message: ".$message;

    // if(mail($to, $subject, $body, $headers)){
    //     echo '<label class="success">Sent your <b>e-mail.</b></label>';
    // }else{
    //     echo '<label class="error">Something went wrong! please try again.</label>';
    // }