<?php

function replace($text)
{

    return preg_replace([
        "/:-?\)/iu",
        "/:-?\(/iu",
        "/:P/iu",
        "/:-\*/iu"
    ],
        [
            'π',
            "π",
            "π",
            "π¬"
        ], $text);
}

function matReplace($mat)
{
    return preg_match("/.*Π΄ΡΡΠ°ΠΊ.*/iu", $mat);
}