<html>

  <head>
    <meta charset="utf-8">
    <title>index</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />
  </head>

  <body>
    <?php include 'header.php' ?>
  <div>
    <form name="upload" class="col" action="upload.php" method="post" autocomplete="off" enctype="multipart/form-data">
      <input name="nom" class="col-lg col-sm-12 col-12 mt-5 form-control" type="text" placeholder="Tu nombre" />

      <div>
        <input name="arxiu" class="custom-file-input" type="file" placeholder="Selecciona un archivo" />
        <label class="custom-file-label" for="customFile">Selecciona un archivo</label>
      </div>

      <div>
        <input name="validacio" id="checkbox" type="checkbox" />
        <label for="checkbox" class="custom-control-label">Quiero enviar el link de descarga por email</label>
      </div>

      <input name="mail" class="col-12 form-control" type="email" placeholder="Email del destinatario" />

      <label for="missatge" class="col-12 mt-4">Mensaje</label>
      <textarea name="missatge" class="col form-control" id="missatge" form="upload"></textarea>

        <button type="submit" value="Subir_Archivo">Subir Archivo</button>
    </form>
  </div>
</body>


</html>