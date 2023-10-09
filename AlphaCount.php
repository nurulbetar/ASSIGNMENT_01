#! /user/bin/env php
<?php

if($argc<2){
    exit("input a integer");
}
class AlphaCount{
    public function getAlpha($alpha){
        $length = strlen($alpha);
        $count = 0;
        for($i=0; $i<$length; $i++){
            if(ctype_alpha($alpha[$i])){
                $count++;
            }
        }

        printf("NUmber of Alphabet is : %d", $count);
    }
}

$alpha = new AlphaCount();
$alpha->getAlpha($argv[1]);