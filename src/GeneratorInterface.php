<?php

namespace shnadyr20220316\src;

interface GeneratorInterface
{
    public function run(
        string $path,
        int $fileCount,
        int $maxNesting,
        int $maxNameLength,
        int $maxFileSize,
        int $fileContentIdentity
    ): void;
}