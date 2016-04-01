<?php

class Calculator
{

    function bytes2mbytes($value1)
    {
        return $value1 / 1048576;
    }
    function mbytes2bytes($value1)
    {
        return $value1 * 1048576;
    }
}

