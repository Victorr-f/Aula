<?php

function middleware($rota){
    echo "3. Middleware está verificando a requisição.<br>";
    $permitido = true;

    if ($permitido) {
        echo "4. Middleware permitiu continuar.<br>";
        dispacher($rota);
    } else {
        echo "4. Middlaweare bloqueou a requisição.<br>";
    }
    }
