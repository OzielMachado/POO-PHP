<?php
/**
 * Programa que cria os objetos e1 da subClasse Engenheiro e m1 da subclasse Medico
 * @author Oziel
 */
    include_once('Engenheiro.php');
    include_once('Medico.php');

    $e1 = new Engenheiro;
    $e1->setNome("Oziel");
    $e1->setDataNasc("29/12/2003");
    $e1->setCpf("588.123.456-87");
    $e1->setRg("1234567890");
    echo $e1->getNome() . "<br>" . $e1->getDataNasc() . "<br>" . $e1->getCpf() . "<br>" . $e1->getRg() . "<br><br>";

    $m1 = new Medico;
    $m1->setNome("Felipe");
    $m1->setDataNasc("14/08/2004");
    $m1->setCpf("817.123.456-98");
    $m1->setRg("0987654321");
    echo $m1->getNome() . "<br>" . $m1->getDataNasc() . "<br>" . $m1->getCpf() . "<br>" . $m1->getRg();

?>