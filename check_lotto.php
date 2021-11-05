<?php

function check_lotto($lotto_num=""){
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

        $text="";
        $amount=0;
        $num_two = substr($lotto_num, -2);

        if($lotto_num == $num){
            $text .= "ถูกรางวัลที่ 1";
            $amount++;
        }elseif ($lotto_num == $num1){
            $text .= "ถูกรางวัลเลขข้างเคียงรางวัลที่ 1";
            $amount++;
        }elseif ($lotto_num == $num2){
            $text .= "ถูกรางวัลเลขข้างเคียงรางวัลที่ 1";
            $amount++;
        }elseif ($lotto_num == $second_1) {
            if($amount==1){$text .= " และ";}else{$text .= "";}
            $text .= "ถูกรางวัลที่ 2";
            $amount++;
        }elseif ($lotto_num == $second_2){
            if($amount==1){$text .= " และ";}else{$text .= "";}
            $text .= "ถูกรางวัลที่ 2";
            $amount++;
        }elseif ($lotto_num == $second_3){
            if($amount==1){$text .= " และ";}else{$text .= "";}
            $text .= "ถูกรางวัลที่ 2";
            $amount++;
        }elseif($lotto_num == ""){
            $text .= "";
        }else{
            $text = "ไม่ถูกรางวัลใดเลย";
        }
        if ($num_two == $twonum){
            if($amount==1){$text .= " และ";}else{$text .= "";}
             $text .= "ถูกรางวัลเลขท้าย 2 ตัว";
        }
        echo $lotto_num." ".$text;

    } else {
        echo "ยังไม่ได้ดำเนินการสุ่มเลขรางวัลล็อตเตอรี่";
    } 
    
    
}

?>