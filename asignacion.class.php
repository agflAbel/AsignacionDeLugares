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
        foreach($grupos as $grupo):
            $final[$i][0]=$grupo;
            $final[$i][1]=$lugares[random_int(0,$nL-1)];
            $i++;
        endforeach;
        
        return $final;
    }
}
?>