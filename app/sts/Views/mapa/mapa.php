<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulário de orçamento</h1>
    <form action="" method="POST">
        <label for="">Origem</label>
        <input type="text" name="start"><br><br>
        <label for="">Destino</label>
        <input type="text" name="end"><br><br>
        <button type="submit" name="smgSend" value="smgSend">Enviar</button>
    </form><br>

        <!-- Calcúlo da distância -->
        <div id="container">
        <div id="map"></div>
        <div id="sidebar">
          <h3 style="flex-grow: 0">Request</h3>
          <pre style="flex-grow: 1" id="request"></pre>
          <h3 style="flex-grow: 0">Response</h3>
          <pre style="flex-grow: 1" id="response"></pre>
        </div>
      </div>

      <!-- Traçagem da rota -->
      <div hidden id="floating-panel">
        <select id="start">
          <option value="<?php if(isset($_SESSION['adress1'])){echo $_SESSION['adress1'];unset($_SESSION['adress1']);} ?>"></option>
        </select>
        <select id="end">
          <option value="<?php     if(isset($_SESSION['adress2'])){echo $_SESSION['adress2'];unset($_SESSION['adress2']);} ?>"></option>
        </select>
      </div>
      <div id="map"></div>
      &nbsp;
      <div id="warnings-panel"></div>
</body>
</html>