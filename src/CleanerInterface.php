<?php

namespace shnadyr20220316\src;

interface CleanerInterface
{
    public function run(string $path): void;
}