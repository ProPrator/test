<?php

namespace shnadyr20220316\src;



class Generator implements GeneratorInterface
{
    /**
     * @param  string  $path
     * @param  int  $fileCount
     * @param  int  $maxNesting
     * @param  int  $maxNameLength
     * @param  int  $maxFileSize
     * @param  int  $fileContentIdentity
     */
    public function run(
        string $path,
        int $fileCount,
        int $maxNesting,
        int $maxNameLength,
        int $maxFileSize,
        int $fileContentIdentity
    ): void {

    }

    private function nameGenerate(int $maxNameLength): string
    {
        $name = md5(microtime(true));
        return substr($name, 0, $maxNameLength);
    }

}