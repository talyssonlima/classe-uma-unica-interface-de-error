<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uma classe de mensagen</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    use Message\Message;

    require __DIR__ . "/Message.php";

    $message = new Message();

    echo $message->success("Isso é uma mensagem de sucesso")->render();
    echo $message->info("Isso é uma mensagem de informação")->render();
    echo $message->warning("Isso é uma mensagem de atenção")->render();
    echo $message->error("Isso é uma mensagem de error")->render();

    /**
     * Na classe exitem os métodos before e after para adiciona prefixos e sufixo na mensagem. É útil para caso você
     * esteja recebendo um resultado genérico vindo de outra classe que use essa classe(Message), e você queira personalizar a mensagem!
     */
    echo $message->before("Opss! ")->success("Isso é uma mensagem de sucesso")->after(" :)")->render();
    echo $message->before("Opss! ")->info("Isso é uma mensagem de informação")->after(" ;)")->render();
    echo $message->before("Opss! ")->warning("Isso é uma mensagem de atenção")->after(" :|")->render();
    echo $message->before("Opss! ")->error("Isso é uma mensagem de error")->after(" :(")->render();

    /**
     * Caso não queria retornar o resultado redenrizado, tem os métodos,
     * getText() para obter só o texto, e getType() para obter o tipo da mensagem!
     */
    $message->before("Opss! ")->success("Isso é uma mensagem de sucesso")->after(" :)")->getType();
    $message->before("Opss! ")->info("Isso é uma mensagem de informação")->after(" ;)")->getText();
    $message->before("Opss! ")->warning("Isso é uma mensagem de atenção")->after(" :|")->getText();
    $message->before("Opss! ")->error("Isso é uma mensagem de error")->after(" :(")->getType();

    ?>
</body>

</html>
<?php
