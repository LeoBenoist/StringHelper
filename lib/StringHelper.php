<?php

namespace LeoBenoist\StringHelper;

/**
 * @author Léo Benoist <jobs.leo@benoi.st>
 */
abstract class StringHelper
{
    /**
     * @param string $string
     *
     * @return string
     *
     * @see https://en.wikipedia.org/wiki/CamelCase
     */
    public static function toUpperCamelCase($string): string
    {
        return str_replace(' ', '', ucwords(str_replace('_', ' ', $string)));
    }

    /**
     * @param string $string
     *
     * @return string
     *
     * @see https://en.wikipedia.org/wiki/CamelCase
     */
    public static function toLowerCamelCase(string $string): string
    {
        return lcfirst(self::toUpperCamelCase($string));
    }

    /**
     * @param string $string
     *
     * @return string
     */
    public static function toSnakeCase(string $string): string
    {
        $string = strtolower(preg_replace('/([A-Z])/', '_$1', lcfirst(self::toUpperCamelCase(trim($string)))));
        $string = preg_replace('/[^A-Za-z0-9_]+/', '_', $string);
        $string = preg_replace('/_+/', '_', $string);
        if (self::endsWith($string, '_')) {
            $string = mb_substr($string, 0, -1);
        }

        return $string;
    }

    /**
     * @param string $string
     *
     * @return string
     */
    public static function toLowerCase(string $string): string
    {
        return str_replace('_', ' ', self::toSnakeCase($string));
    }

    /**
     * @param string $string
     *
     * @return mixed
     */
    public static function toHumanCase(string $string): string
    {
        return ucfirst(str_replace('_', ' ', self::toSnakeCase($string)));
    }

    /**
     * @param string $haystack
     * @param string $needle
     *
     * @return bool
     */
    public static function endsWith(string $haystack, string $needle): bool
    {
        return $needle === ''
            || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== false);
    }

    /**
     * @param string $haystack
     * @param string $needle
     *
     * @return bool
     */
    public static function startsWith(string $haystack, string $needle): bool
    {
        return $needle === ''
            || strrpos($haystack, $needle, -strlen($haystack)) !== false;
    }

    /**
     * @param string $haystack
     * @param string $separator
     *
     * @return null|string
     */
    public static function extractPrefix(string $haystack, string $separator = '-')
    {
        $explodedGroup = explode($separator, $haystack);

        return array_values($explodedGroup)[0];
    }

    /**
     * @param string $haystack
     * @param string $separator
     *
     * @return string
     */
    public static function extractSuffix(string $haystack, string $separator = '-'): string
    {
        if (!static::contains($haystack, $separator)) {
            return '';
        }

        $explodedRight = explode($separator, $haystack);

        return array_pop($explodedRight);
    }

    /**
     * @param string $haystack
     * @param string $separator
     *
     * @return string
     */
    public static function removePrefix(string $haystack, string $separator = '-')
    {
        if (!static::contains($haystack, $separator)) {
            return $haystack;
        }

        $explodedRight = explode($separator, $haystack);
        array_shift($explodedRight);

        return implode($separator, $explodedRight);
    }

    /**
     * @param string $haystack
     * @param string $separator
     *
     * @return string
     */
    public static function removeSuffix(string $haystack, string $separator = '-')
    {
        if (!static::contains($haystack, $separator)) {
            return $haystack;
        }

        $explodedRight = explode($separator, $haystack);
        array_pop($explodedRight);

        return implode($separator, $explodedRight);
    }

    /**
     * @param string $haystack
     * @param string $needle
     *
     * @return bool
     */
    public static function contains(string $haystack, string $needle): bool
    {
        return strpos($haystack, $needle) !== false;
    }

    public static function getStringBetween(string $haystack, string $start, string $end): string
    {
        $haystack = ' ' . $haystack;
        $ini = strpos($haystack, $start);
        if ($ini == 0) {
            return '';
        }
        $ini += strlen($start);
        $len = strpos($haystack, $end, $ini) - $ini;

        return substr($haystack, $ini, $len);
    }
}
