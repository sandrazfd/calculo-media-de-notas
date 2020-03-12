/*
// criar um formulario que irá receber 2 grupos de valores
// 3 notas sendo (matemática,português,artes) 1 semestre
// 3 notas sendo (matemática,português,artes) 2 semestre

// no back end achar as médias entre os semestres
// e exibir a tela as médias por semestre e a média final

// ex: Média do primeiro semestre: 7.75
//     Média do segundo semestre: 8.75
//     Média final: 8.25

// calcular a média dos primeiro semestre e a do segundo pra achar a media final
*/
<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>
<body>
    

<form method="POST" action="notas.php">
<h1>1 Semestre</h1>
        <div>
            <label for="matematica">Matemática: </label>
            <input type="number" step="0.01" id="matematica" name="nota_matematica1" min ="0" max="10">    
        </div>
        <div>
            <label for="portugues">Português: </label>
            <input type="number" step="0.01" id="portugues" name="nota_portugues1"min ="0" max="10">    
        </div>
        <div>
            <label for="artes">Artes: </label>
            <input type="number" step="0.01" id="artes" name="nota_artes1"min ="0" max="10">    
        </div>

<h1> 2 Semestre</h1>
        <div>
            <label for="matematica">Matemática: </label>
            <input type="number" step="0.01" id="matematica" name="nota_matematica2"min ="0" max="10">    
        </div>
        <div>
            <label for="portugues">Português: </label>
            <input type="number" step="0.01" id="portugues" name="nota_portugues2"min ="0" max="10">    
        </div>
        <div>
            <label for="artes">Artes: </label>
            <input type="number" step="0.01" id="artes" name="nota_artes2"min ="0" max="10">    
        </div>
        <button>Enviar</button>

</form>



</body>
</html>
