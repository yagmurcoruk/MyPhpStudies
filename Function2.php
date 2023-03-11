<?php 
// FONKSİYON VAR MI YOK MU? :
    function yaz($a){
        return $a;
    }
    
    echo yaz(5);
    echo "<br>";
    if (function_exists("yaz"))   //  function_exists --> fonksiyon var mı yok mu diye bakar.
    {
       echo "Aranan fonksiyon var.";
    }
    else{
        echo "Aranan fonksiyon bulunamadı";
    }


?>