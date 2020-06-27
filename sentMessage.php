<?php
   $email = "gitawisataadm@gmail.com";
   $mailSub = "Contact Us From Landing Page Gita Wisata"; 
   $name = $_POST['name'];
   $phone = $_POST['phone'];
   $message = $_POST['message'];
   $emailAnony = $_POST['email'];
   $mailMsg = "Pesan Dari <br>
               Nama  : $name <br>
               Email : $emailAnony <br>
   			   Pesan Adalah :$message<br>";
   echo "$mailSub <br>";
   echo "$mailMsg"; 
   require "PHPMailer/PHPMailerAutoload.php";
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "gitawisataadm@gmail.com"; //email cuciin
   $mail ->Password = "308731915089gita"; //password gmail
   $mail ->SetFrom("gitawisataadm@gmail.com"); //email cuciin
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($email);


   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Email Terikirim";
   }

    header("location:index.php");



?>
