<?php 



//$ok = 1;
//if (isset($ok)) {
   include 'classes/teste.php';
//}else{
    //echo "a variavel $ok não tá definida";
//}

$teste = new Classe1('robson',26);


echo $teste->getnome();
echo "<hr>";

echo $teste->getidade();

 ?>