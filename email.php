<?php

    if (isset($_POST['email']) && ! empty($_POST['email']) ) {
       
   

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mesage = $_POST['mesage'];


    $to = "vinimasim.simoes@gmail.com";
    $subject = "contato - Masim";
    $body = "nome: ".$nome. "\r\n". 
             "email: ".$email. "\r\n".
             "mesage: ".$mesage;

    $header = "Form:vinimasim.simoes@gmail.com"."\r\n"."Reply-to: " .$email."\r\n"."X=Mailer:PHP/". phpversion();

   if(mail($to,$subject,$body, $header)){

     echo "E-mail enviado com sucesso!";

   }else {

    echo "O e-mail não pode ser enviado!";

   }
}

?>