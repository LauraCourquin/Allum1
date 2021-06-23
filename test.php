<?php


$matches = 11;
$maxmatches = 3;
$minmatches =1;
$turn = "player";

function verif($matches, $maxmatches, $minmatches, $turn){
    if ($matches == 0 && $turn == "player"){
        echo "You lost...";
        sleep(2);
        exit();

    } elseif ($matches == 0 && $turn == "ia"){
        echo "I lost...";
        sleep(2);
        exit();
    }else{
       change($matches, $maxmatches, $minmatches, $turn);
    }
}

function change($matches, $maxmatches, $minmatches, $turn){
    for ($i = 0; $i < $matches; $i++){
        echo "|";
    } echo "\n";
    if ($turn == "ia"){
        $turn = "player";
        echo "Your turn : \n";
        player($matches, $maxmatches, $minmatches, $turn);
    } elseif ($turn == "player"){
        $turn = "ia";
        ia($matches, $maxmatches, $minmatches, $turn);
    }
}
function ia($matches, $maxmatches, $minmatches, $turn){
    $random = rand($minmatches, $maxmatches);
    if ($matches == 11){
        $matches = $matches -2;
        echo "IA removed 2 matches \n";
        sleep(1);
        verif($matches, $maxmatches, $minmatches, $turn);
    }elseif ($matches == 10){
        $matches = $matches -1;
        echo "IA removed 1 match \n";
        sleep(1);
        verif($matches, $maxmatches, $minmatches, $turn);
    }elseif ($matches == 9){
        $matches = $matches - $random;
        echo "IA removed $random matches \n";
        sleep(1);
        verif($matches, $maxmatches, $minmatches, $turn);
    }elseif ($matches == 8){
        $matches = $matches -3;
        echo "IA removed 3 matches \n";
        sleep(1);
        verif($matches, $maxmatches, $minmatches, $turn);
    }elseif ($matches == 7){
        $matches = $matches -2;
        echo "IA removed 2 matches \n";
        sleep(1);
        verif($matches, $maxmatches, $minmatches, $turn);
    }elseif ($matches == 6){
        $matches = $matches -1;
        echo "IA removed 1 match \n";
        sleep(1);
        verif($matches, $maxmatches, $minmatches, $turn);
    }elseif ($matches == 5){
        $matches = $matches - $random;
        echo "IA removed $random matches \n";
        sleep(1);
        verif($matches, $maxmatches, $minmatches, $turn);
    }elseif ($matches == 4){
        $matches = $matches -3;
        echo "IA removed 3 matches \n";
        sleep(1);
        verif($matches, $maxmatches, $minmatches, $turn);
    }elseif ($matches == 3){
        $matches = $matches -2;
        echo "IA removed 2 matches \n";
        sleep(1);
        verif($matches, $maxmatches, $minmatches, $turn);
    }elseif ($matches == 2){
        $matches = $matches -1;
        echo "IA removed 1 match \n";
        sleep(1);
        verif($matches, $maxmatches, $minmatches, $turn);
    }elseif ($matches == 1){
        $matches = $matches -1;
        echo "IA removed 1 match \n";
        sleep(1);
        verif($matches, $maxmatches, $minmatches, $turn);
    }
}

function player($matches, $maxmatches, $minmatches, $turn){
    $line = readline("Matches : ");
    if (strlen($line)>1){
        echo "You can't, must enter an integer \n";
        player($matches, $maxmatches, $minmatches, $turn);
    }
    elseif ($line == 0){
        echo "You can't enter 0 \n";
        player($matches, $maxmatches, $minmatches, $turn);
    }
    elseif ($line > $maxmatches){
        echo "You can't enter number above 3 \n";
        player($matches, $maxmatches, $minmatches, $turn);
    }
    elseif ($line < $minmatches){
        echo "You must enter number between 1 and 3 \n";
        player($matches, $maxmatches, $minmatches, $turn);
    }else{
        $matches = $matches - $line;
        echo "You removed $line matches \n";
        sleep(1);
        verif($matches, $maxmatches, $minmatches, $turn);
    }
}

verif($matches, $maxmatches, $minmatches, $turn);