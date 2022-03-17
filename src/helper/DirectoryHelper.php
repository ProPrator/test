<?php

namespace shnadyr20220316\src\helper;

class DirectoryHelper
{
    /**
     * @param  string  $element
     * @return bool
     */
    public static function isCorrectDirectory(string $element): bool
    {
        return is_dir($element);
    }

    /**
     * @param  string  $path
     * @return bool
     */
    public static function removeDirectory(string $path): bool
    {
        return rmdir($path);
    }
}