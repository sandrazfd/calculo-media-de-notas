<?php

$matematica = $_POST['nota_matematica1'];
$portugues = $_POST['nota_portugues1'];
$artes = $_POST['nota_artes1'];

// echo "<h4>Matemática: $nota_matematica1</h4>";
// echo "<h4>Português: $nota_portugues1</h4>";
// echo "<h4>Artes: $nota_artes1</h4>";


$matematica = $_POST['nota_matematica2'];
$portugues = $_POST['nota_portugues2'];
$artes = $_POST['nota_artes2'];

// echo "<h4>Matemática: $nota_matematica2</h4>";
// echo "<h4>Português: $nota_portugues2</h4>";
// echo "<h4>Artes: $nota_artes2</h4>";


function media1 () {

    $matematica = $_POST['nota_matematica1'];
    $portugues = $_POST['nota_portugues1'];
    $artes = $_POST['nota_artes1'];
    
    $media = ($matematica + $portugues + $artes) / 3;
    
    return $media;
}


echo "Média do primeiro semestre é: " . number_format (media1(),2);
echo "<br>";

function media2 () {
    $matematica = $_POST['nota_matematica2'];
    $portugues = $_POST['nota_portugues2'];
    $artes = $_POST['nota_artes2'];

    $media = ($matematica + $portugues + $artes) / 3;
    
    return $media;
}

echo "Média do segundo semestre é: " .number_format (media2(),2);
echo "<br>";


function media_final () {
    $m_final = (media1() + media2()) / 2;

    return $m_final;
}


echo "Média final é: " .number_format (media_final(),2);
echo "<br>";

function passouDeAno(){
    if(media_final() >=7){
        return "Arrasou";
    }
    return "Falhou, precisa estudar mais";
}
echo passouDeAno();