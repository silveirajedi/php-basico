<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>018 - Upload de Arquivos</title>
</head>
<body style="font-size: 1.1em">
<div style="background-color: gray;"><h2>Upload</h2></div>
<?php

$folder = __DIR__ . "/018/uploads";

if (!file_exists($folder) || !is_dir($folder)) {
    mkdir($folder, 0755);
}

var_dump([
        "filesize" => ini_get("upload_max_filesize"),
        "postsize" => ini_get("post_max_size")
]);

var_dump([
        filetype(__DIR__ ."/018"),
        filetype(__DIR__ ."/018.php"),
        mime_content_type(__DIR__ . "/018.php")
]);

$getpost = filter_input(INPUT_GET, "post", FILTER_VALIDATE_BOOLEAN);

if ($_FILES && !empty($_FILES['file']['name'])) {
    $fileUpload = $_FILES["file"];
    var_dump($fileUpload);

    $allowedTypes = [
            "image/jpg",
            "image/jpeg",
            "image/png",
            "aplication/pdf"
    ];

    $newFileName = time() . mb_strstr($fileUpload['name'], ".");

    if (in_array($fileUpload['type'], $allowedTypes)) {
        if (move_uploaded_file($fileUpload['tmp_name'], __DIR__ . "/018/uploads/{$newFileName}")){
            echo "<p style='color: green'>Enviado com sucesso</p>";
        } else {
            echo "<p style='color: red'>Ocorreu algum erro</p>";
        }
    } else {
        echo "<p style='color: orange'>Tipo de arquivo não é válido</p>";
    }

} elseif ($getpost) {
    echo "<p style='color: orange'>Whooops, parece que o arquivo é muito grande!!!</p>";
} else {
    if (!$_FILES) {
        echo "<p style='color: orange'>Selecione um arquivo antes de enviar</p>";
    }
}

include __DIR__ . "/018/form.php";

?>




</body>
</html>