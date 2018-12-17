<?php
if(isset($_GET['text1']) && $_GET['text2']) {
    $text1 = $_GET['text1'];
    $text2 = $_GET['text2'];

    $array_text1 = explode(' ', $text1);
    $array_text2 = explode(' ', $text2);

    echo "<h1>Mots en commun</h1>";

    for($i = 0; $i < sizeof($array_text1); $i++) {
        for($j = 0; $j < sizeof($array_text2); $j++) {
            if($array_text1[$i] == $array_text2[$j]) {
                echo $array_text1[$i] . "<br>";
            }
        }
    }
}