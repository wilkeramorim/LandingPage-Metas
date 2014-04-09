<?php

        /************************
        * Variáveis da página
        *************************/

        $mailto   = "marketing@strategymanager.com.br"; // Enter your mail addres here.
        $name     = ucwords($_POST['name']);
        $subject  = "$name está interessado na solução Valorae."; // Definir o assunto aqui.
        $email    = $_POST['email'];
        $fone  = $_POST['fone'];

        if(strlen($_POST['name']) < 1 ){
        echo  'email_error';
        }

        else if(strlen($email) < 1 ) {
        echo 'email_error';
        }

        else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", $email)) {
        echo 'email_error';
        }

        else if(strlen($fone) < 1 ){
        echo 'email_error';

        } else {

        // NOW SEND THE ENQUIRY

        $email_message="\n\n" .
        "Nome: " .
        ucwords($name) .
        "\n" .
        "E-mail: " .
        $email .
        "\n" .
        "Telefone: " .
        "\n" .
        $fone .
        "\n" .
        "\n\n" ;

        $email_message = trim(stripslashes($email_message));
        mail($mailto, $subject, $email_message, "De: \"$vname\" <".$email.">\nReply-To: \"".ucwords($name)."\" <".$email.">\nX-Mailer: PHP/" . phpversion() );

        }
?>