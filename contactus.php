<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email']; // email of sender
    $phone = $_POST['phone'];  //phone no. of sender
    $message = $_POST['message'];  //message by sender
    $mailFrom = $_Post['mail'];

    $mailTo = "focusitstudio@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $email, $txt, $headers);
    header("Location: index.php?mailsend");
}