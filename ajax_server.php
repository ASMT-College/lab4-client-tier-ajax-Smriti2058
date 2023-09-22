<?php
$god=array();
$god[]="BIkash";
$god[]="BISHNU";
$god[]="RADHA";
$god[]="KRISHNA";
$god[]="SITA";
$god[]="RAM";
$god[]="Ganesh";
$searchdata = strtolower($_GET['q']);
$data_length = strlen($searchdata);
$datas ='';
if($data_length == 0){
    $datas = '';
    exit(0);
}
else{
    foreach($god as $gods){
        if($searchdata == strtolower(substr($gods,0,$data_length))){
            $datas =$datas.$gods." ,";
        }
    }
    print_r($datas);
}
//assignment iframe
?> 