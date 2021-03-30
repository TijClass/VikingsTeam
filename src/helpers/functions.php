<?php

/**
 * Get file extension from filename
 *
 * @param string $filename
 *
 * @return string
 */
function file_extension($filename)
{
    return mb_substr(mb_strrchr($filename, '.'), 1);
}

/**
 * Returns of direct output of given function
 *
 * @param callable $callback
 *
 * @return string
 */
function ob_wrapper($callback)
{
    ob_start();
    $callback();
    return ob_get_clean();
}

/**
 * Turns urls to hyperlinks.
 *
 * USAGE: echo urls_to_links('http://localhost/'); outputs <a href="http://localhost/">http://localhost/</a>
 *
 * @param string $str
 *
 * @return string
 */
function urls_to_links($str)
{
    $pattern = '/((?:http|https)(?::\\/{2}[\\w]+)(?:[\\/|\\.]?)(?:[^\\s"]*))/is';
    $replace = '<a target="blank" href="$1">$1</a>';
    return preg_replace($pattern, $replace, $str);
}

/**
 * Uppercase the first character of each word in a string.
 *
 * Works with utf8, before processing string will be transformed to lowercase, and then to ucwords.
 *
 * @param string $str
 *
 * @return string
 */
function mb_ucwords($str)
{
    return mb_convert_case($str, MB_CASE_TITLE);
}

/**
 * Convert input to int type. Accepts arrays.
 *
 * @param mixed|mixed[] $in
 *
 * @return int|int[]
 */
function _int($in)
{
    if (is_array($in)) {
        return array_map(function ($in) {
            return (int) $in;
        }, $in);
    }
    return (int) $in;
}

/**
 * Convert input to float type. Accepts arrays.
 *
 * @param mixed|mixed[] $in
 *
 * @return float|float[]
 */
function _float($in)
{
    if (is_array($in)) {
        return array_map(function ($in) {
            return (float) $in;
        }, $in);
    }
    return (float) $in;
}

/**
 * Convert input to string type. Accepts arrays.
 *
 * @param mixed|mixed[] $in
 *
 * @return string|string[]
 */
function _string($in)
{
    if (!is_array($in)) {
        return (string) $in;
    }
    return array_map(function ($in) {
        return (string) $in;
    }, $in);
}

/**
 * Convert input to array type. Accepts arrays.
 *
 * @param mixed|mixed[] $in
 *
 * @return array|array[]
 */
function _array($in)
{
    if (!is_array($in)) {
        return (array) $in;
    }
    return array_map(function ($in) {
        return (array) $in;
    }, $in);
}
