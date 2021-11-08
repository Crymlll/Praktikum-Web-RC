<?php
    function prima($n){
        for($i=1;$i<=$n;$i++){
            $cek=0;
            for($j=1;$j<=$i;$j++){
                if($i%$j==0){
                    $cek++;
                }
            }
            if($cek==2){
                echo "$i ";
            }
        }
    }

    echo "<h1>Soal 3 Prima</h1><br>";
    $n=50;
    echo "Hasil bilangan prima dari 1 - $n yaitu = "; prima($n);
?>