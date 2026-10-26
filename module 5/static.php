<?php

function rritja(){
    static $numri=0;
    $numri++;
    echo "numri eshte : $numri . <br>";

}
rritja();
rritja();
rritja();
?>