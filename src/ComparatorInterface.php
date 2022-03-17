<?php

namespace shnadyr20220316\src;

interface ComparatorInterface
{
    public function run(string $path): array;
}