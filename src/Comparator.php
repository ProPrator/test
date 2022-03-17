<?php

namespace shnadyr20220316\src;

use FilesystemIterator;
use shnadyr20220316\src\helper\DirectoryHelper;

class Comparator implements ComparatorInterface
{
    /**
     * @var array
     */
    private $sameFileList = [];

    /**
     * @param  string  $path
     * @return array
     */
    public function run(string $path): array
    {
        $iterator = new FilesystemIterator($path);
        foreach ($iterator as $element) {
           $this->compareElement($element);
        }
        return $this->sameFileList;
    }

    /**
     * @param  string  $element
     */
    private function compareElement(string $element): void
    {
        if(DirectoryHelper::isCorrectDirectory($element)) {
            $this->run($element);
        }
        else {
            $this->saveFileNameInList($element);
        }
    }

    /**
     * @param  string  $element
     */
    private function saveFileNameInList(string $element): void
    {
        $hash =  md5_file($element);
        $this->addElementToArray($element, $hash);
    }

    /**
     * @param  string  $element
     * @param  string  $hash
     */
    private function addElementToArray(string $element, string $hash): void
    {
        $this->sameFileList[$hash] = $element;
    }
}