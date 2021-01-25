**Uma classe que fornece um ponto global para lançar as mensagens do sistema.**

Para utilizar, é necessário apenas baixar e **instanciar a classe Message**, e escolher qual tipo de mensagem usar em cada situação.

**Exemplo de usos:**
```php
<?php

use Message\Message;

require  __DIR__  .  "/Message.php";

$message = new  Message();

echo  $message->success("Isso é uma mensagem de sucesso")->render();
echo  $message->info("Isso é uma mensagem de informação")->render();
echo  $message->warning("Isso é uma mensagem de atenção")->render();
echo  $message->error("Isso é uma mensagem de error")->render();

/**
* Na classe exitem os métodos before e after para adiciona prefixos e sufixo na mensagem. É útil para caso você
* esteja recebendo um resultado genérico vindo de outra classe que use essa classe(Message), e você queira personalizar a mensagem!
*/
echo  $message->before("Opss! ")->success("Isso é uma mensagem de sucesso")->after(" :)")->render();
echo  $message->before("Opss! ")->info("Isso é uma mensagem de informação")->after(" ;)")->render();
echo  $message->before("Opss! ")->warning("Isso é uma mensagem de atenção")->after(" :|")->render();
echo  $message->before("Opss! ")->error("Isso é uma mensagem de error")->after(" :(")->render();

/**
* Caso não queria retornar o resultado redenrizado, tem os métodos,
* getText() para obter só o texto, e getType() para obter o tipo da mensagem!
*/
$message->before("Opss! ")->success("Isso é uma mensagem de sucesso")->after(" :)")->getType();
$message->before("Opss! ")->info("Isso é uma mensagem de informação")->after(" ;)")->getText();
$message->before("Opss! ")->warning("Isso é uma mensagem de atenção")->after(" :|")->getText();
$message->before("Opss! ")->error("Isso é uma mensagem de error")->after(" :(")->getType();

?>
```
![Result](https://lh3.googleusercontent.com/TcKWVF_0felzL-0c7zyOlUIvM2oOO1G8d93dsu9zGM4OjlJga2LGGI2YfJ27ZIXoUi02AZesQUc5lzkzdx2ebqcl_xyPojgQm_xD9Iti5ZirqDbhIUQPrMGUPw3HZ5LW5bln-BQ6B1hPYA27x-TxXplbJha-wMW4POK5U7YTBWWVCprx7Z5UtuHd4jXtXQDjny1viKBCpTH8NiVGZ8dyf_SRDCM-j0Q1ZxdIzVv5GBzVff_d9Hjv-y-itjVrCYXIqXmsVNAJWpdYoJzSlqJYIlbJMZcLNGVzyp86_M2u67His-rPR2jHM25wZ7mgP3wItQ-TPOgk97XPo3FnNG3SPlUHftgL-TwJmbcPrBIySkM6sLsu0JQcNe2QOY9B8IYm8CyGkpP_b9hGsB5Y7ogdIF0pyU6FWUz7ciXmBr2lXJByKZZXMQHeTD_oBeigSEssK7Ig5IWQrm0MV5atEywXYcnRWYKe5vsQZCBDgo_9C6IQ0DecoxhebKRYTOuuVQWMeImm_FzOi3gh2uj4At3gbtqqo4ZSF7llp9Xhm0mdO28Xd83DNsmDq6ux21A4bRD3zwU5qCK99AL5mgFgejOw7KLZafxUrdFt5LTDwtl7hvo-p6yXApsEwiuT0XTnM4slCwU0vxgjoX6njQ9x5t7foMQrjFPcPJn8pekwBYUaL1VOasd1T12tQ2yzwC5tVw=w655-h591-no?authuser=0)
