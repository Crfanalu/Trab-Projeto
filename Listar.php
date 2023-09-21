<?php
require "Conexao.php";
require "Bebida.php";
require "RepositorioBebida.php";

$repLivro = new RepsitorioBebida();

$todasBebidas = $repBebida->exibirtTudo($banco);

foreach($todasBebidas as $Bebida){
    echo "\n-----------------------------";
    echo "\n Nome da Bebida | {$Bebida['nomebebida']}";
    echo "\n Tipo de Bebida | {$Bebida['tipobebida']}";
    echo "\n Sabor da Bebida | {$Bebida['saborbebida']}";
    echo "\n Teor Alcoolico da Bebida | {$Bebida['tabebida']}";
    echo "\n Pais de Origem da Bebida | {$Bebida['pobebida']}";
    echo "\n-----------------------------";

}
