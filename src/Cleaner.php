<?php

namespace shnadyr20220316\src;

use FilesystemIterator;
use shnadyr20220316\src\helper\DirectoryHelper;


class Cleaner implements CleanerInterface
{

    /**
     * @param  string  $path
     * @return void
     */
    public function run(string $path): void
    {
        $iterator = new FilesystemIterator($path);
        foreach ($iterator as $element) {
           $this->cleanElement($element);
        }
        DirectoryHelper::removeDirectory($path);
    }

    /**
     * @param  string  $element
     */
    private function cleanElement(string $element): void
    {
        if(DirectoryHelper::isCorrectDirectory($element)) {
            $this->run($element);
        }
        else {
            $this->removeElement($element);
        }
    }

    /**
     * @param  string  $path
     * @return bool
     */
    private function removeElement(string $path): bool
    {
        return unlink($path);
    }
}