<?php
class ServicePatient{

    private $db;
    private $patient;

    public function __construct(IConn $db ,IPatient $patient){
        $this->db = $db->connect();
        $this->patient = $patient;
    }

    public function list(){
        $query = "select * from patient";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    public function save(){
        $query = "insert into patient (`nome`,`datadenascimento`,`genero`,`endereco`,`sintomas`,`gravidade`,`acompanhamento`,`datadeinicio`) VALUES (:nome,:datadenascimento,:genero,:endereco,:sintomas,:gravidade,:acompanhamento,:datadeinicio)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":nome",$this->patient->getNome());
        $stmt->bindValue(":datadenascimento",$this->patient->getDataDeNascimento());
        $stmt->bindValue(":genero",$this->patient->getGenero());
        $stmt->bindValue(":endereco",$this->patient->getEndereco());
        $stmt->bindValue(":sintomas",$this->patient->getSintomas());
        $stmt->bindValue(":gravidade",$this->patient->getGravidade());
        $stmt->bindValue(":acompanhamento",$this->patient->getAcompanhamento());
        $stmt->bindValue(":datadeinicio",$this->patient->getDataDeInicio());
        $stmt->execute();
        return $this->db->lastInsertId();
    }
}
?>