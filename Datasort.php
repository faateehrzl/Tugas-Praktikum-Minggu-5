<?php
function datasort(){
    $dataList = array('larine','aduh','qifuat','toda','anevi','samid','kifuat','batu','angin','daun');
    
    sort($dataList);

    for($i=0; $i<10; $i++){
        echo $dataList[$i];
        echo '<br>';
    }
}
echo '<b>Pengurutan 10 Data Acak</b><br><br>';
pengurutan();
?>