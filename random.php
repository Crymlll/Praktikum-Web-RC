<?php
    $data= array("larine","aduh","rahman","qifuat","aulia","toda","anevi","samid","zulfi","kifulat");
    
    function acak($data){
        for($i=0;$i<count($data);$i++){
            if($i!=count($data)-1){
                echo "$data[$i], ";
            }else{
                echo "$data[$i]";
            }
        }
    }

    function urutan($data){
        sort($data);
        for($i=0;$i<count($data);$i++){
            if($i!=count($data)-1){
                echo "$data[$i], ";
            }else{
                echo "$data[$i]";
            }
        }
    }

    echo "<h1>Soal 2 Mengurutkan Data</h1><br>";
    echo "Data sebelum pengurutan = "; acak($data); echo "<br>";
    echo "Data setelah pengurutan = "; urutan($data);  
?>