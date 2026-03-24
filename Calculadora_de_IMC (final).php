<h2> Calculadora de IMC </h2> <br><br>

<?php

$altura = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $altura = $_POST["altura"];
}

?>

<form method = "post">
    <label>Qual é a sua altura? </label><br>
    <input type="number" name="altura" step="0.01" min="0" placeholder="Ex: 1.80">
    <button type="submit">Enviar</button>
</form>


<?php

$peso = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = $_POST["peso"];
}

?>

<form method = "post">
    <label>Qual é o seu peso?</label><br>
    <input type="number" name="peso" step="00.1" min="0" placeholder="Ex: 80">
    <button type="submit">Enviar</button>
</form>


<?php


echo "__________________________________________<br><br>";



$imc = $peso / ($altura * $altura);

if ($imc < 16) {echo 'Seu IMC é Magreza grau III';}

elseif ($imc >= 16 && $imc <= 16.9) {echo 'Seu IMC é Magreza grau II';}

elseif ($imc >= 17 && $imc <= 18.4) {echo 'Seu IMC é Magreza grau I';}

                elseif ($imc >= 18.5 && $imc <= 24.9) {echo 'Seu IMC é Eutrofia';}

elseif ($imc >= 25 && $imc <= 29.9) {echo 'Seu IMC é Pré-obesidade';}

elseif ($imc >= 30 && $imc <= 34.9) {echo 'Seu IMC é Obesidade moderada (grau I)';}

elseif ($imc >= 35 && $imc <= 39.9) {echo 'Seu IMC é Obesidade severa (grau II)';}

else { echo 'Seu IMC é Obesidade muito severa (grau III)';}

?>

