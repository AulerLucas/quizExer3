<?php
$n = $_POST['numero'];
    if($n > 0){
        echo "O número ".$n."é de valor positivo";
            }else if($n == 0) {
                echo "O número ".$n."é de valor neutro";
                    }else {
                        echo "O número ".$n."é de valor negativo"; 
                        }
?>