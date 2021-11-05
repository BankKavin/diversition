<?php
function shuffle_num(){
require('random.php');

  list($num,$num1,$num2,$second_1,$second_2,$second_3,$twonum)=lottery_random();
  $response = array();
$lotto = array();
$lotto[] = array('number1'=> $num, 'nearnum1'=> $num1,'nearnum2'=> $num2, 'number2_1'=> $second_1,'number2_2'=> $second_2, 'number2_3'=> $second_3,'two_number'=> $twonum);
 

$response['lotto'] = $lotto;

$fp = fopen('results.json', 'w');
fwrite($fp, json_encode($response));
fclose($fp);

}

shuffle_num();
header( "location:index.php" );
?>