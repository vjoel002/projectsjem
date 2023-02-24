<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulário parte 1</h1>
    <form action="<?php URL ?>mapa1" method="POST" >
        <input type="text" name="cep1" placeholder="CEP">

        <input type="text" name="start" placeholder="Endereço 1">
        <input type="number" name="number1" placeholder="Número"><br><br>
        
        <input type="text" name="city1" placeholder="Cidade">
        <input type="text" name="complement1" placeholder="Complemento">
        <input type="text" name="neighborhood1" placeholder="Bairro">
        <input type="text" name="state1" placeholder="Estado"><br><br>
        <input type="text" name="immobile1" placeholder="Tipo de imóvel"><br><br>

        <button type="submit" name="smgSend" value="smgSend">Próximo</button>
    </form><br>
</body>
</html>