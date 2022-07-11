<?php
    include("Vendas.php");
    include("Produtos.php");

    // declarando o produto 1
    $p1 = new Produtos();
    $p1->nome = "Guaraná Jesus";
    $p1->valorUN = 5;
    $p1->qtd = 2;
    $p1->calcular();

    // declarando o produto 2
    $p2 = new Produtos();
    $p2->nome = "Coquinha gelada";
    $p2->valorUN = 6;
    $p2->qtd = 1;
    $p2->calcular();

    //gerando a venda
    $venda2 = new Vendas();
    $venda2->produtos[0] = $p1;
    $venda2->numprod++;
    $venda2->produtos[1] = $p2;
    $venda2->numprod++;
    $venda2->imprimir();

?>