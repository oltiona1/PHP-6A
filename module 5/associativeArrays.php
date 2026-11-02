<?php

$grade=array(
    "Math"=>"3",
    "Gjuhe"=>"4",
    "Art"=>"5"
);


foreach($grade as $subject=> $grade){
    echo "Subject: ". $subject ." ". $grade . " <br> ";
}


?>