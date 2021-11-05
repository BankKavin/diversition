<?php

function lottery_random(){

        $number = range(0,999);
        shuffle($number);
        $lottery = $number[0];

        $number2 = range(0,999);
        shuffle($number2);
        $shuf2 = $number2;
        $key = array_search($lottery, $shuf2);
        unset($shuf2[$key]);
        foreach ($shuf2 as $value) {
            $lottery2[]= $value;
          }

        $a = range(0,998);
        shuffle($a);
        $b=$a[0];
        $c=$a[$b];
        $d=$a[$c];

        $lottery2_1 = $lottery2[$b];
        $lottery2_2 = $lottery2[$c];
        $lottery2_3 = $lottery2[$d];

            if($lottery2_1<=9){$second_1 = "00".$lottery2_1;}
            else if($lottery2_1<=99){$second_1 = "0".$lottery2_1;}
            else{$second_1 = $lottery2_1;}

            if($lottery2_2<=9){$second_2 = "00".$lottery2_2;}
            else if($lottery2_2<=99){$second_2 = "0".$lottery2_2;}
            else{$second_2 = $lottery2_2;}

            if($lottery2_3<=9){$second_3 = "00".$lottery2_3;}
            else if($lottery2_3<=99){$second_3 = "0".$lottery2_3;}
            else{$second_3 = $lottery2_3;}

        if($lottery<=9){
            $num = "00".$lottery;
            $near1 = $lottery+1;
            $near2 = $lottery-1;
            if($lottery == 0){
                $num1 = "001";
                $num2 = "999";
            }else{
                $num1 = "00".$near1;
                $num2 = "00".$near2;
            }
        }else if($lottery<=99){
            $num = "0".$lottery;
            $near1 = $lottery+1;
            $near2 = $lottery-1;
            $num1 = "0".$near1;
            $num2 = "0".$near2;
        }else{
            $num = $lottery;
            if($lottery == 999){
                $num1 = "000";
                $num2 = "998";
            }else{
                $num1 = $lottery+1;
                $num2 = $lottery-1;
            }
        }

        $two_number = range(0,99);
        shuffle($two_number);
        $twolottery = $two_number[0];

            if($twolottery<=9){$twonum = "0".$twolottery;}
            else{$twonum = $twolottery;}

            return [$num,$num1,$num2,$second_1,$second_2,$second_3,$twonum];
    
}
?>