<?php
    if(isset($_POST['submit'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        // $phone=$_POST['phone'];
        $msg=$_POST['msg'];

        $to='josephbikinweb@gmail.com';
        $subject='Form Submission';
        $message="Name :".$name."\n"."Menulis :".\n\n".$msg;
        $headers="From :".$email;

        if(mail($to, $subject, $message, $headers)) {
            echo"<h1>Sent Succesfully! <br> Thank You</h1>".".$name.", "<h1>We will contact you soon</h1>"
        }
        else {
            echo "Something went wrong"
    }
    }
?>