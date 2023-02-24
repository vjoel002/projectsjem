<style>
    .adress1{
        display: none;
    }
</style>
<h1>Formulário parte 2</h1>
    <form action="<?php URL ?>resultmapa" method="POST">
        <div class="adress1">
            <label for="">Origem</label>
            <input type="text" name="middleAd" value="<?php if(isset($_POST['start'])){
                echo $_POST['start'];
                unset($_POST['start']);
            } ?>" placeholder="Endereço 1">

            <input type="number" name="middleNber" value="<?php if(isset($_POST['number1'])){
                echo $_POST['number1'];
                unset($_POST['number1']);
            } ?>" placeholder="Número"><br><br>
        </div>

        <div class="adress2">
            <input type="text" name="cep2" placeholder="CEP">

            <input type="text" name="end" value="" placeholder="Endereço 2">
            <input type="number" name="number02" value="" placeholder="Número"><br><br>

            <input type="text" name="city2" placeholder="Cidade">
            <input type="text" name="complement2" placeholder="Complemento">
            <input type="text" name="neighborhood2" placeholder="Bairro">
            <input type="text" name="state2" placeholder="Estado"><br><br>
            <input type="text" name="immobile2" placeholder="Tipo de imóvel"><br><br>
        </div>
        <button type="submit" name="smgSend" value="smgSend">Calcular frete</button>
    </form><br>
