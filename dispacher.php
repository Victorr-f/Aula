<?php

function dispatcher($rota){
    echo "5. Dispacher decidiu qual controller deve executar.<br>";
    if (rota == "/usuarios") {
        usuarioController();
    }
}