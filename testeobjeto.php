<?php
class OS
{
    public 
      $num, $ordem;

    function __construct($num, $ordem)
    {
        $this->num = $num;
        $this->ordem = $ordem;

       // echo "Equipamento tipo " . $this->num . " Ordem de serviço numero " . $this->ordem . "  \n";
    }
}

echo "Digite quantidade de OS que vc ira dar entada :  ";
$num = fgets(STDIN);

  if($num == 0){
    echo "Digite um numero sem ser zero  \n";
    exit;
  }

  for ($i = 1; $i <= $num; $i++){
    echo "------------------------------------------------\n";
    echo "Digite o tipo de equipamento ".$i."   :   ";
    $equip = fgets(STDIN);


$OS[$i] = new OS($equip, $i);

  }

  for($v = 1; $v <= $num; $v++){
    echo "------------------------------------------------\n";
    echo " Equipamento tipo  ".$OS[$v]->num;
    echo " Ordem de serviço numero : ".$OS[$v]->ordem."\n";
  }
  echo "------------------------------------------------\n";

