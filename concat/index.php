<?php

class concationationArray
{
    public function concatArray(array $array1): void
    {
        $result = "";
        for($i=0; count($array1)> $i; $i++)
        {
            $result = $result . $array1[$i];
        }
        echo $result;
    }
}
