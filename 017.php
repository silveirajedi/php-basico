<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>017 - Formulários e Filtros</title>
</head>
<body style="font-size: 1.1em">
<div style="background-color: gray;"><h2>Request</h2></div>
<?php

$form = new stdClass();
$form->name = "Leandro";
$form->email = "email@email.com";

var_dump($_REQUEST);


?>

<div style="background-color: gray;"><h2>Post</h2></div>
<?php

var_dump($_POST);

$post = filter_input(INPUT_POST, "name", FILTER_DEFAULT);
$postArray = filter_input_array(INPUT_POST, FILTER_DEFAULT);

var_dump([
        $post,
        $postArray
]);

if($postArray){
    if (in_array("", $postArray)) {
        echo "<p style='color: red'>Preencha todos os campos!</p>";
    } elseif (!filter_var($postArray['email'], FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color: red'>E-mail Inválido</p>";
    } else {
        $saveStrip = array_map("strip_tags", $postArray);
        $save = array_map("trim", $saveStrip);
        var_dump($save);
        echo "<p style='color: darkblue'>Dados Enviados!</p>";
    }
}

$form->method = "post";
include __DIR__ . "/017/form.php"

?>

<div style="background-color: gray;"><h2>Get</h2></div>
<?php

var_dump($_GET);

$get = filter_input(INPUT_GET, "email", FILTER_DEFAULT);
$getArray = filter_input_array(INPUT_GET, FILTER_DEFAULT);

var_dump($get, $getArray);

$form->method = "get";
include __DIR__ . "/017/form.php";




?>

<div style="background-color: gray;"><h2>Filters</h2></div>
<?php

var_dump(
    filter_list(),
    [
        filter_id("validate_email"),
        FILTER_VALIDATE_EMAIL,
        filter_id("string"),
    ]
);

$filterForm = [
    "name" => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    "email" => FILTER_VALIDATE_EMAIL
];

$getForm = filter_input_array(INPUT_GET, $filterForm);
var_dump($getForm);

$email = "contato@contato.com";

var_dump([
    filter_var($email, FILTER_VALIDATE_EMAIL),
    filter_var_array($getForm, $filterForm)
]);

?>




</body>
</html>