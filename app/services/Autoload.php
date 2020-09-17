<?php

class Autoload
{
    public function load($className)
    {
        $fileName = dirname(dirname(__DIR__)) . "/{$className}.php";
            if (file_exists($fileName)) {
                include $fileName;
            }
        }
}
