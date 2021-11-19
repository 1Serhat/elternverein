<?php

    if(isset($_POST['submit'])) {

        $name = $_POST['name'];
        $adress= $_POST['adress'];
        $email= $_POST['email'];
        $number= $_POST['number'];
        $message= $_POST['message'];


        $mailTo = "admin@elternvereinwbo.ch";
        $headers= "From: ".$email;
        // $subject = "Mail From website";

        $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
        // $headers = ("Location: contactFeedback.html");

        mail($mail, $adress, $txt, $headers);
        // header("Location:index.php?mailsend");
        header("Location:contactFeedback.html");

    }   


?>