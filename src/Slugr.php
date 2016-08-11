<?php

namespace Slugr;

/**
 * Class Slugr
 * @package Slugr
 */
abstract class Slugr
{
    /**
     * Expression for preg_replace
     *
     */
    const EXPRESSION = '/([^A-Za-z0-9]|-)+/';

    /**
     * Seperator sequence to use
     */
    const SEPERATOR = '-';

    /**
     * Convert the input to lowercase? true/false
     */
    const LOWERCASE = false;

    /**
     * Character limit to use (if any) on the result
     */
    const LIMIT = null;

    /**
     * @param $string
     * @param null $separator
     * @param null $lowercase
     * @param null $expression
     * @return string
     */
    public static function slugify($string, $separator = null, $lowercase = null, $limit = null, $expression = null)
    {
        if ($lowercase === null) {
            $lowercase = self::LOWERCASE;
        }
        if ($separator === null) {
            $separator = self::SEPERATOR;
        }
        if ($limit === null) {
            $limit = self::LIMIT;
        }
        if ($expression === null) {
            $expression = self::EXPRESSION;
        }

        if ($lowercase === true) {
            $string = mb_strtolower($string);
        }
        $string = preg_replace($expression, $separator, $string);

        if ($limit) {
            $string = substr($string, 0, $limit);
        }

        return trim($string, $separator);
    }
}
