<?php

        //1 - Definimos Para quem vai ser enviado o email
        $para = "wilker.amorim@strategymanger.com.br";
        //2 - resgatar o nome digitado no formulário e grava na variavel
        $nome = $_POST['nome'];
        //3 - resgatar o e-mail digitado no formulário e grava na variavel //
        $email = $_POST['email'];
        //4 - resgatar o assunto digitado no formulário e grava na variavel //
        $fone = $_POST['fone'];

        //6 - agora inserimos as codificações corretas e tudo mais.
        $headers = "Content-Type:text/html; charset=UTF-8\n";
        $headers .= "From: strategymanger.com.br<wilker.amorim@strategymanger.com.br>\n";

        //Vai ser //mostrado que o email partiu deste email e seguido do nome
        $headers .= "X-Sender: <wilker.amorim@strategymanger.com.br>\n";

        //email do servidor //que enviou
        $headers .= "X-Mailer: PHP v".phpversion()."\n";
        $headers .= "X-IP: ".$_SERVER['REMOTE_ADDR']."\n";
        $headers .= "Return-Path: <wilker.amorim@strategymanger.com.br>\n";

        //caso a msg //seja respondida vai para este email.
        $headers .= "MIME-Version: 1.0\n";
        mail($para, $nome, $email, $fone);

        //função que faz o envio do email.

        ?>
