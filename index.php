<?php
date_default_timezone_set('America/Sao_Paulo');

//Verificar horario
echo $horario1= date('h:m:s' ) ."\n";
echo $horario2= date('h:m:s' ,strtotime('1 hours'))."\n";
$tempo = gmdate('H:i:s', strtotime( $horario2 ) - strtotime( $horario1 ) );
echo " $tempo \n";
echo"\n ";
//Verificar data
echo " As datas subtraidas são: \n";
echo "Data inicio :". $primeira=date('Y/m/d')."\n";
 echo "Data final :". $segunda=date('Y/m/d',strtotime('1 day'))."\n";
$datainicio=date_create($primeira);
$datafim=date_create($segunda);
$resultado = date_diff($datainicio, $datafim);
echo "Diferença:" ,date_interval_format($resultado, '%a') ." Dias \n";




?>