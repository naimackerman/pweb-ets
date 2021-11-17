<?php

    if (isset($_POST['formContact']['submit'])) {
        $to = "nurahmadkhatim@gmail.com";
        $from = $_POST['formContact']['email'];
        $name = $_POST['formContact']['name'];
        $phone = $_POST['formContact']['phone'];
        $subject = "Form Contact Submission";
        $subject2 = "Copy of Your Contact Submission";
        $message = $name . " (" . $phone . ")" . " Sent the following message:\n\n" . $_POST['formContact']['msg'];
        $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['formContact']['msg'];

        $headers = "From: " . $from;
        $headers2 = "From: " . $to;
        mail($to, $subject, $message, $headers);
        mail($from, $subject2, $message2, $headers2);
    }

?>