<?php

/**
 * Custom Function.
 */

function trim_replace($find, $replace, $str): string
{
    return trim(str_replace($find, $replace, $str));
}