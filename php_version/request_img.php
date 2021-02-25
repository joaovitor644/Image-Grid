
<?php

$img = glob('../style/img/*jpg');

$cont = 0;
$c2 = 0;
$cimg = (count($img) - 1);
$n1 = 0;


while($c2 <= round((count($img) - 1 ) / 5 )){
    if($img[$cont] == false){
        break;
    }
    echo "<div class='image-group'>";
    while($n1 <= 4 ){ 
         if($img[$cont] == false){
            break;
        }
        echo "<img src={$img[$cont]}>";
        $cont++;
        $n1++;
      
    }
    echo "</div>";
    $c2++;
    $n1 = 0;
}