<?php
if (count($data)==0){
    echo "data kosong";
}else{
    foreach($data as $row){
        echo $row['name']."<br>";
    }
}
?>