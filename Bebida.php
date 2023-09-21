<?php
class Bebida{
    private string $nome;
    private string $tipo;
    private string $sabor;
    private string $ta;
    private string $po;

    function __construct(string $nome, string $tipo, string $sabor, string $ta, string $po)
    {
        $this->definirnome($nome);
        $this->definirtipo($tipo);
        $this->definirsabor($sabor);
        $this->definirta($ta);
        $this->definirpo($po);

    }
    function definirnome(string $nome){
       $this->nome = $nome;
    }
    function definirtipo(string $tipo){
        $this->tipo = $tipo;
    }
    function definirsabor(string $sabor){
        $this->sabor = $sabor;
    }
    function definirteoralcoolco(string $ta){
        $this->ta = $ta;
    }
    function definirpaisorigem(string $po){
        $this->po = $po;
    }
    
    public function exibirnome()
    {
        return $this->nome;
    }
    public function exibirtipo()
    {
        return $this->tipo;
    }
    public function exibirsabor()
    {
        return $this->sabor;
    }
    public function definirta()
    {
        return $this->ta;
    }
    public function definirpo()
    {
        return $this->po;
    }
    
}