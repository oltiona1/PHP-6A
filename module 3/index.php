<?php
$numri=4;
if($numri<0){
 echo "$numri is less than 0 <br>";

}
else{
    echo"nuk eshte plotesuar kushti <br>";
}

$numri1=4;
if(($numri1>0)&&($numri1<10)){
    echo "$numri1 dy kushtet duhet te plotesohen <br>";

}else{
    echo"nuk eshte plotesuar kushti";
}

$numri2=5;
if(($numri2>0)||($numri2<10)){
    echo "$numri2 mjafton nje kusht te plotesohet";

}else{
    echo"nuk eshte plotesuar kushti";
}
?>