<?php
// https://www.php.net/manual/en/class.recursiveiteratoriterator.php
    $size = 0;
    $dri = new RecursiveDirectoryIterator("./", RecursiveDirectoryIterator::SKIP_DOTS);
    $files = new RecursiveIteratorIterator ($dri);

    foreach ($files as $file) {
        if($file->isFile()){
            $size += $file->getSize();
        }
        // echo $file->getPath().DIRECTORY_SEPARATOR.$file->getFilename()."\n";
    }
    echo "Total size: ".$size." Bytes\n";

 