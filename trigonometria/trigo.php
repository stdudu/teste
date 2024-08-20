<?php
function ReducaoPrimeiroQuadrante($graus){
    if($graus >= 90 and $graus < 180){
        return 180 - $graus;
    }
    else if($graus >= 180 and $graus < 270){
        return $graus - 180;
    }
    else if($graus >= 270 and $graus < 360){
        return 360 - $graus;
    }
    else if($graus >= 360){
        return $graus%360;
    }
}
function GrausParaRadianos($graus){
    return $graus * (pi() / 180);
}

$angulo = $_POST['angulo'];
echo "<h2>Seno, Cosseno e Tangente do Angulo $angulo</h2>";
echo "<h5>Seno de $angulo: </h5>"."<p>".sin(GrausParaRadianos($angulo))."</p>";
echo "<h5>Cosseno de $angulo: </h5>"."<p>".cos(GrausParaRadianos($angulo))."</p>";
if(ReducaoPrimeiroQuadrante($angulo) == 90){
    echo "<p>Tangente Inexistente (divisao por zero)</p>";
}
else
echo "<h5>Tangente de $angulo: </h5>"."<p>".tan(GrausParaRadianos($angulo))."</p>";
?>