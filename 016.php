<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>016 - Manipulação/Gestão de Arquivos e Diretorios</title>
</head>
<body style="font-size: 1.1em">
<div style="background-color: gray;"><h2>Arquivos - Verificação</h2></div>
<?php

$file = __DIR__ . "/016/file.txt";

if (file_exists($file) && is_file($file)) {
    echo "<p>O arquivo existe!</p>";
} else {
    echo "<p>O arquivo não existe!</p>";
}


?>

<div style="background-color: gray;"><h2>Arquivos - Leitura e Gravação</h2></div>
<?php

if (!file_exists($file) || !is_file($file)) {
    $fileOpen = fopen($file, "w");
    fwrite($fileOpen, "Linha 01" . PHP_EOL);
    fwrite($fileOpen, "Linha 02" . PHP_EOL);
    fwrite($fileOpen, "Linha 03" . PHP_EOL);
    fwrite($fileOpen, "Vou escrever qualquer coisa aqui " . PHP_EOL);
    fclose($fileOpen);
} else {
    var_dump(
            file($file),
            pathinfo($file)
    );
}

echo "<p>", file($file)[3], "</p>";

$open = fopen($file, "r");
while (!feof($open)) {
    echo "<p>" . fgets($open) . "</p>";
}

fclose($open);

?>

<div style="background-color: gray;"><h2>Arquivos - Get Content | Put Content</h2></div>
<?php

$getContents = __DIR__ . "/016/file2.txt";
if (file_exists($getContents) && is_file($getContents)){
    echo "Arquivo já existe!";
    echo file_get_contents($getContents);
} else {
    $data = "<article><h1>Leandro</h1><p>CEO Fratelli<br>contato@fratelliti.com.br</p></article>";
    file_put_contents($getContents, $data);
    echo file_get_contents($getContents);
}

//unlink($getContents);
//unlink($file);

?>

<div style="background-color: gray;"><h2>Diretórios - verificar, criar e abrir</h2></div>
<?php

$folder = __DIR__ . "/016/uploads";

if (!file_exists($folder) || !is_dir($folder)) {
    mkdir($folder, 0755);
} else {
    var_dump(scandir($folder));
}

?>

<div style="background-color: gray;"><h2>Diretórios - copiar e renomear</h2></div>
<?php

var_dump(
        pathinfo($file),
        scandir($folder),
        scandir(__DIR__)
);

if (!file_exists($file) || !is_file($file)) {
    fopen($file, "w");
} else {
    copy($file, $folder . "/" . basename($file));
}

//filemtime - retorna a última vez que o arquivo foi modificado
var_dump(filemtime($file), filemtime(__DIR__ . "/016/uploads/file.txt"));
//rename(__DIR__ . "/016/uploads/file.txt", __DIR__  . "/016/uploads/" . time() . "." . pathinfo($file)["extension"]);
rename($file, __DIR__ . "/016/uploads/" . time() . "." . pathinfo($file)["extension"]);

?>

<div style="background-color: gray;"><h2>Diretórios - remover e deletar</h2></div>
<?php

//rmdir(__DIR__ . "/016/remove");
$dirRemove = __DIR__ . "/016/remove";
$dirFiles = array_diff(scandir($dirRemove), ['.', '..']);
$dirCount = count($dirFiles);

var_dump($dirFiles, $dirCount);

if ($dirCount >= 1) {
    echo "<h2>Clear... - " . pathinfo($dirRemove)['basename']. "</h2>";
    foreach (scandir($dirRemove) as $fileItem) {
        $fileItem = __DIR__ . "/016/remove/{$fileItem}";
        if(file_exists($fileItem) && is_file($fileItem)) {
            unlink($fileItem);
        }
    }
} else {
    rmdir($dirRemove);
    echo "<h2>Diretório Removido</h2>";
}

?>

</body>
</html>