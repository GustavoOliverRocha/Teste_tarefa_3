<?php

/**
 *   3 - Escreva um programa
        Escreva um programa que preencha um array com 20 números inteiros sorteados entre 1 e 10. Depois informe qual ou quais número(s) não se repetiram.

*/

        $nums = [];
        $naoRepetidos = [];
        $r = 0;

        for($i = 1; $i <= 20; $i++)
            array_push($nums,mt_rand(1,10));

        echo "Array: ";

       foreach($nums as $n)
                echo " $n";

        foreach($nums as $n)
        {

            for($i = 0; $i< sizeof($nums); $i++)
            {
                if($nums[$i] === $n)
                    $r++;
            }

            if($r === 1)
                array_push($naoRepetidos,$n);

            $r = 0;
        }

        echo "<br>Numeros que não repetiram : ";

        foreach($naoRepetidos as $nr)
            echo " $nr";