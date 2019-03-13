<?php
/**
 * Created by PhpStorm.
 * User: Arjun Singh
 * Date: 16-02-2019
 * Time: 16:43
 */

$name_error = $email_error = $msg_error = "";
$name = $email = $msg = $subject = $success_msg = "";
$err = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["sname"])) {
        $name_error= "Name is required";
        $err = true;
    }
    else {
        $name = $_POST["sname"];
    }

    if (empty($_POST["semail"])) {
        $email_error = "Email is required";
        $err = true;
    }
    else {
        $email = $_POST["semail"];
    }

    if (empty($_POST["smsg"]))  {
        $msg_error = "Message is required";
        $err = true;
    }
    else {
        $msg = $_POST["smsg"];
    }

    if (!empty($_POST["ssubject"]))  {
        $subject =  $_POST["ssubject"];
    }

    if(!$err){
        // SEND EMAIL
        $success_msg="Response Recorded Successfully! We'll revert back soon!.";
        $msg=$subject="";
    }
}
