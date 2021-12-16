<form name="post" action="./017.php" method="<?= $form->method ?>" enctype="multipart/form-data" novalidate>
    <p style="margin-bottom: 10px; text-align: right"><a href="./017.php" title="Atualizar">Atualizar</a></p>
    <div class="col2">
        <input type="text" name="name" value="<?= $form->name; ?>" placeholder="Nome:"/>
        <input type="email" name="email" value="<?= $form->email; ?>" placeholder="E-mail:"/>
    </div>
    <button>Enviar Agora!</button>
</form>