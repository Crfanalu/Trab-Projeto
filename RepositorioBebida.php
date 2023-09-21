<?php
class RepositorioBebida{
    public function cadastrar(PDO $banco, Bebida $Bebida)
    {
       $sqlInsert = "INSERT INTO Bebida(nome, tipo, sabor, teoralcoolico, paisorigem) VALUES(:n, :t, :s, :ta, :pa)";

       $insert = $banco->prepare($sqlInsert);

       $nome = $Bebida->exibirnome();
       $tipo = $Bebida->exibirtipo();
       $sabor = $Bebida->exibirsabor();
       $ta = $Bebida->exibirta();
       $po = $Bebida->exibirpo();

       $insert->bindParam(":n", $nome);
       $insert->bindParam(":t", $tipo);
       $insert->bindParam(":s",$sabor);
       $insert->bindParam(":ta",$ta);
       $insert->bindParam(":pa", $po);

       $insert->execute();
    }

    public function exibirtudo(PDO $banco){
        $sql = "SELECT * FROM BEBIDA";
        $dado = $banco->query($sql); 
        return $dado->fetchAll(PDO::FETCH_ASSOC); 
    }
    }
