<?php
class Patient implements IPatient{
    private $id;
    private $nome;
    private $datadenascimento;
    private $genero;
    private $endereco;
    private $sintomas;
    private $gravidade;
    private $acompanhamento;
    private $datadeinicio;

public function getId(){
    return $this->id;
}
public function setId($id) {
    $this->id = $id;
    return $this;
}
public function getNome() {
    return $this->nome;
}
public function setNome($nome) {
    $this->nome = $nome;
    return $this;
}
public function getDataDeNascimento() {
    return $this->datadenascimento;
}
public function setDataDeNascimento($datadenascimento) {
    $this->datadenascimento = $datadenascimento;
    return $this;
}
public function getGenero(){
    return $this->genero;
}
public function setGenero($genero) {
    $this->genero = $genero;
    return $this;
}
public function getEndereco() {
    return $this->endereco;
}
public function setEndereco($endereco) {
    $this->endereco = $endereco;
    return $this;
}
public function getSintomas() {
    return $this->sintomas;
}
public function setSintomas($sintomas) {
    $this->sintomas = $sintomas;
    return $this;
}
public function getGravidade() {
    return $this->gravidade;
}
public function setGravidade($gravidade) {
    $this->gravidade = $gravidade;
    return $this;
}
public function getAcompanhamento(){
    return $this->acompanhamento;
}
public function setAcompanhamento($acompanhamento) {
    $this->acompanhamento = $acompanhamento;
    return $this;
}
public function getDataDeInicio() {
    return $this->datadeinicio;
}
public function setDataDeInicio($datadeinicio) {
    $this->datadeinicio = $datadeinicio;
    return $this;
}
}
?>