<?php

function get_massiv($link){
    $sql="SELECT * FROM homework WHERE url LIKE \"%ua\"";
    $result=mysqli_query($link,$sql);
    $massiv=mysqli_fetch_all($result,MYSQLI_ASSOC);

    return $massiv;
}

$massiv = get_massiv($link);