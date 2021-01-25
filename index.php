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

    echo $message->before("Opss! ")->success("Isso é uma mensagem de sucesso")->after(" :)")->render();
    echo $message->before("Opss! ")->info("Isso é uma mensagem de informação")->after(" ;)")->render();
    echo $message->before("Opss! ")->warning("Isso é uma mensagem de atenção")->after(" :|")->render();
    echo $message->before("Opss! ")->error("Isso é uma mensagem de error")->after(" :(")->render();
    ?>
</body>

</html>
<?php
