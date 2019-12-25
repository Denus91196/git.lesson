<?php
function randArray() {

    $arrey=[];
    $year=rand(2000, 2010);
    echo $year;
    for ($year;$year<=2019;$year++){

        $znach=rand(1, 15);
        $arrey[$year] = $znach;
    }
    return $arrey;


}

function randColor()
{
    $color = " ";

    $r = rand(0, 122);
    $g = rand(0, 12);
    $b = rand(0, 208);

    $color = "rgb(" . $r . ", " . $g . ", " . $b . ")";
    return $color;
}

function makeDiagram($mass) {

    echo "<div style='display: flex; align-items: baseline;'>";

    foreach ($mass as $key => $value ) {

        echo "<div style='margin-right: 5px; background: " . randColor() . "; width: 40px; height: " . $value . "px;'> </div>";

    }
    echo "</div>";

}
?>
