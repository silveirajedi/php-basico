<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>020 - Cookies | Session</title>
</head>
<body style="font-size: 1.1em">
<div style="background-color: gray;"><h2>Cookies</h2></div>
<?php

setcookie("phpbasico", "Esse é o meu cookie", time() + 10);
//setcookie("phpbasico", null, time() - 60); (removendo o cookie)

$cookie = filter_input_array(INPUT_COOKIE, FILTER_SANITIZE_STRIPPED);

var_dump(
    $_COOKIE,
    $cookie
);

$time = time() + 60 * 60 * 24 * 7; // criar cookie no máximo 7 dias
$user = [
    "user" => "root",
    "passwd" => "12345",
    "expire" => $time
];

setcookie(
    "fratellilogin",
    http_build_query($user),
    $time,
    "/",
    "localhost",
    true //somente acessado por https
);

$login = filter_input(INPUT_COOKIE, "fratellilogin", FILTER_SANITIZE_STRIPPED);
if ($login){
    var_dump($login);
    var_dump($user);
}

?>

<div style="background-color: gray;"><h2>Session</h2></div>
<?php

session_name('PHPBASICOSESSID');
session_start();

$folder = __DIR__ . "/020-ses";

if (!file_exists($folder) || !is_dir($folder)) {
    mkdir($folder, 0755);
}

var_dump($_SESSION,
    [
        "id" => session_id(),
        "name" => session_name(),
        "status" => session_status(),
        "save_path" => session_save_path(),
        "cookie" => session_get_cookie_params()
    ]
);

$_SESSION['login'] = (object)$user;
$_SESSION['user'] = (object)$user;

//unset($_SESSION['user']); tira uma sessão expecífica

//session_destroy();


?>


</body>
</html>