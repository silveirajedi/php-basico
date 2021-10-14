<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>001 - Introdução a estrutura do PHP</title>
</head>
<body>
    <?php
        /* Aqui pode ir um comentário
         * Essa página cria uma variável $start e coloca dentre de uma tag <h1>
         *
         * */
        $start = "- Desenvolvido por Leandro";
        echo "<h1>Olá Mundo! {$start}</h1>";
        echo "<p>Loading...</p>"
    ?>
</body>
</html>