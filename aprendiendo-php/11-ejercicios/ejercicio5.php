<?php
echo "<h1>Hola</h1>";

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    if($numero1<$numero2){
        for($numero1;$numero1<$numero2;$numero1++){
            echo $numero1."<br>";
        }
        
    }elseif($numero1==$numero2){
        echo "Son iguales";
    }else{
        for($numero2;$numero2<=$numero1;$numero2++){
            echo $numero2."<br>";
        }
    }
    
}else{
    echo "<h1>Ingresa bien los números</h1>";
}