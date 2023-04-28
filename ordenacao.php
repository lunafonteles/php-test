<?php
function ordenar($array){
    $freq = array_count_values($array);
    var_dump($freq);

    $aux = array();
    foreach ($array as $elem) {
        $aux[] = $freq[$elem];
    }

    array_multisort($aux, SORT_ASC, $array, SORT_ASC);
    return $array;
}
    echo "primeiro<br>";
    echo implode(", ", ordenar(array(3, 1, 2, 2, 4)));
    echo "<br>segundo<br>";
    echo implode(", ", ordenar(array(8, 5, 5, 5, 5, 1, 1, 1, 4, 4)));
    echo "<br>terceiro<br>";
    echo implode(", ", ordenar(array(1, 2, 3, 7, 1, 8, 2)));
?>
