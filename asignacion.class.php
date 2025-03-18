<?php
$lugares = "ee";
class Asigna {
    function getArray($text){
        $lineas = explode("\n",$text);
        return $lineas;
    }
    function asignar($lugares,$grupos){
        $nL = count($lugares);
        $nG = count($grupos);
        $i=0; 
        $c=0;
        $mañana=2;
        $ns=[];
        foreach($grupos as $grupo):
            do{
                if($c<$mañana){
                    $n = random_int(0,$mañana-1);
                    $c++;
                }else{
                    $n = random_int($mañana,$nL-1);
                }
            }while(in_array($n,$ns,true));
            $ns[]=$n;
            $final[$i][0]=$grupo;
            $final[$i][1]=$lugares[$n];
            $i++;
        endforeach;
        
        return $final;
    }
}
?>