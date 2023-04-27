<?php
    function adicao($n1, $n2)
    {
        $result = $n1 + $n2;
        return ($result);
    }

    function subtracao($n1, $n2)
    {
        $result = $n1 - $n2;
        return ($result);
    }

    function multiplicacao($n1, $n2)
    {
        $result = $n1 * $n2;
        return ($result);
    }
    
    function divisao($n1, $n2)
    {
        $result = $n1 / $n2;
        return ($result);
    }

    function celsius($t)
    {
        $f = (($t/5) * 9) + 32;
        return ($f); 
    }

    function fahrenheit($t)
    {
        $c = (($t - 32)/9)*5;
        return ($c);
    }

    function centimetro($v)
    {
        $result = $v * 0.01;
        return ($result);
    }

    function metro($v)
    {
        $result = $v * 100;
        return ($result);
    }
    
    function metroq($v)
    {
        $result = $v * 0.001;
        return ($result);
    }
    
    function quilometro($v)
    {
        $result = $v * 1000;
        return ($result);
    }
?>