<?php 

    function generaToken()
    {
        $letras = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','u','v','w','x','y','z'];
        $numeros = [1,2,3,4,5,6,7,8,9,0];

        $token = "";
        
        for ($i=0; $i < 5; $i++) {
            $n = rand(0,10);//para hacer las mayusculas y minusculas random podría usar $i pero seria menos random
            if ($n%2==0) {
                $token = $token . $letras[rand(0,24)] . $numeros[rand(0,9)];
            }else{
                $token = $token . strtoupper($letras[rand(0,24)]) . $numeros[rand(0,9)];
            }
        }
        return $token;
    }

    echo generaToken();
?>