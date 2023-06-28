<?php

/**
 * Custom Function.
 */

/**
 * This is Function Trim and Replace.
 * @param array|string $search 
 * The value being searched for, otherwise known as the needle. An array may be used to designate multiple needles.
 * @param array|string $replace 
 * The replacement value that replaces found search values. An array may be used to designate multiple replacements.
 * @param array|string $subject 
 * The string or array being searched and replaced on, otherwise known as the haystack.
 */
function trimReplace($search, $replace, $subject): string
{
    return trim(str_replace($search, $replace, $subject));
}

function transformAuthData($data): object
{
    $index = array_search(WEB_AGENT, array_column($data->weblists, 'webag'));
    $result = (object) array_merge(
        (array) $data,
        (array) $data->weblists[$index]
    );
    unset($result->weblists);
    return $result;
}
