<?php
    require "funcoesCalculo.php";
    $resultado = "";

    if(!empty($_GET['inputNum1']) && !empty($_GET['inputNum2']))
    {
        $n1 = $_GET['inputNum1'];
        $n2 = $_GET['inputNum2'];

        if ($_GET['selectOperacoes'] == "adicao")
            $resultado = $n1 . " + " . $n2 . " = " . adicao($n1, $n2);
        else if ($_GET['selectOperacoes'] == "subtracao")
            $resultado = $n1 . " - " . $n2 . " = " . subtracao($n1, $n2);
        else if ($_GET["selectOperacoes"] == "multiplicacao")
            $resultado = $n1 . " * " . $n2 . " = " . multiplicacao($n1, $n2);
        else if ($_GET["selectOperacoes"] == "divisao")
            $resultado = $n1 . " / " . $n2 . " = " . divisao($n1, $n2);
    }
    if(!empty($_POST['inputTemp']))
    {
        $t = $_POST['inputTemp'];
        if ($_POST['selectOperacoes'] == "Celsius")
            $resultado = "Temperatura de Celsius {$t} para Fahrenheit = " . celsius($t);
        else if ($_POST['selectOperacoes'] == "Fahrenheit")
            $resultado = "Temperatura de Fahrenheit {$t} para Celsius = " . fahrenheit($t);
    }
    if(!empty($_GET['inputMed']))
    {
        $v = $_GET['inputMed'];
        if ($_GET['selectOperacoes'] == "centimetro")
            $resultado = "Centímetro {$v} para Metro = " . centimetro($v);
        else if ($_GET['selectOperacoes'] == "metro")
            $resultado = "Metro {$v} para Centímetro = " . metro($v);
        else if ($_GET['selectOperacoes'] == "metroq")
            $resultado = "Metro {$v} para Quilômetro = " . metroq($v); 
        else if ($_GET['selectOperacoes'] == "quilometro")
            $resultado = "Quilômetro {$v} para Metro = " . quilometro($v);
    }

    echo "Resultado: {$resultado}";
?>