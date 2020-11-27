<?php
require_once"IConn.php";
require_once"Conn.php";
require_once"IPatient.php";
require_once"Patient.php";
require_once"ServicePatient.php";
                        /*nomedobanco=dados,nomeuser=root,senha="" */
$db = new Conn('localhost','sistema','root', ''); 
$patient = new Patient;
# PARA SALVA DADOS NO BANCO
/*
$patient ->setNome("Junior")
         ->setDataDeNascimento("10/02/2012")
         ->setGenero("Masculino")
         ->setEndereco("Cana brava")
         ->setSintomas("Febre")
         ->setGravidade("Alta")
         ->setAcompanhamento("Maria Laryssa")
         ->setDataDeInicio('27/11/2020');
$service = new ServicePatient($db, $patient);
print_r($service->save());
*/
# PARA LISTA OS DADOS DO BANCO
/*
$service = new ServicePatient($db, $patient);
print_r($service->list());
*/
?>