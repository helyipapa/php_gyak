<?php
//keszits egy fugvenyt ami atvesz egy stringet tömböt es vissza adja nagybetuskent
function capitalizeAll(array $names): array
{
    /*$tempArray = [];
    foreach ($names as $name)
    {
        $tempArray[] = mb_strtoupper($name);
    }
    return $tempArray;*/
    array_map("mb_strtoupper",$names);
}


$names = ["Pista","Jóska","Éva"];

$capitalizedNames = capitalizeAll($name);

print_r($capitalizedNames);

?>