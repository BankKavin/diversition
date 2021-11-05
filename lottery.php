<?php
    $filename = 'results.json';
    if (file_exists($filename)) {
        $data = file_get_contents('results.json');
        $json_arr = json_decode($data, true);
        $num = $json_arr['lotto'][0]['number1'];
        $num1 = $json_arr['lotto'][0]['nearnum1'];
        $num2 = $json_arr['lotto'][0]['nearnum2'];
        $second_1 = $json_arr['lotto'][0]['number2_1'];
        $second_2 = $json_arr['lotto'][0]['number2_2'];
        $second_3 = $json_arr['lotto'][0]['number2_3'];
        $twonum = $json_arr['lotto'][0]['two_number'];
    } else {
        $num = "";
        $num1 = "";
        $num2 = "";
        $second_1 = "";
        $second_2 = "";
        $second_3 = "";
        $twonum = "";
    } 
?>