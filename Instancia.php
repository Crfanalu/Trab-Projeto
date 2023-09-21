<?php
require "Bebida.php";
require "Conexao.php";
require "RepositorioBebida.php";
$Bebida = new Bebida('Império', 'Cerveja', 'Pilsen', '4,5%', 'Brasileira');

$repBebida= New RepositorioBebida();

$Bebida1 = New Bebida('Império', 'Cerveja', 'Pilen','4,5%', 'Breasileira');
$Bebida2 = New Bebida('Heineken', 'Cerveja', 'Armagor Leve', '5,6%', 'Holandesa');
$Bebida3 = New Bebida('Dell Vale', 'Suco', 'Uva', 'o,o%', 'México');

$repBebida->cadastrar($banco,$Bebida1);
$repBebida->cadastrar($banco,$Bebida2);
$repBebida->cadastrar($banco,$Bebida3);

$Tabela = "CREATE TABLE IF NOT EXISTS Bebida(NomeBebida TEXT, TipoBebida TEXT, SaborBebida TEXT, TeorAlcoolicoBebida TEXT, PaisOrigemBebida TEXT, primary key(codigo))";

$Banco->query($Tabela);

