<?php

class concationationArray
{
    public function concatArray(array $array1): void
    {
        $result = "";
        for ($i = 0; count($array1) > $i; $i++) {
            $result = $result . $array1[$i];
        }
        echo $result;
    }
}
$array1 = ["asfsd", "dsfaa", "ADFSG", "1q423"];
$concationationObject = new concationationArray();
$concationationObject->concatArray($array1);
