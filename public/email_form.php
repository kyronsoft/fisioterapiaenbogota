<?php
switch (@$_GET['do'])
 {

 case "send":

      $fname = $_POST['nombre'];
      $lname = $_POST['telefono'];
      $femail = $_POST['email'];
      $fsendmail = $_POST['mensaje'];
      

    if (!preg_match("/\S+/",$fname))
    {
      unset($_GET['do']);
      $message = "Nombre es requerido. Intente nuevamente.";
      break;
    }
    if (!preg_match("/\S+/",$lname))
    {
      unset($_GET['do']);
      $message = "Apellido es requerido. Intente nuevamente.";
      break;
    }
     
       $myemail = "info@fisioterapiaenbogota.com";
       $emess = "Nombre: ".$fname."\n";
       $emess.= "Telefono: ".$lname."\n";
       $emess.= "Email 1: ".$femail."\n";
       $emess.= "Comentarios: ".$fsendmail;
       $ehead = "From: ".$femail."\r\n";
       $subj = "Mensaje enviado de ".$fname." ".$lname."!";
       $mailsend=mail("$myemail","$subj","$emess","$ehead");
       $message = "Mensaje Enviado.";
 
       unset($_GET['do']);
       header("location: single.php");
     break;
 
 default: break;
 }
