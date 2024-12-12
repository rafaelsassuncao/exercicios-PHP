<?php

    function alteraDados($nome, $idade) {

        $nome = "Sr. $nome";
        $idade = "$idade anos.";

        return [$nome, $idade];

    }

    $dados = alteraDados("Rafael", 33);

    echo "Olá $dados[0], você têm $dados[1]. <br>";