<?php
    $di = new DirectoryIterator("./");
    foreach ($di as $file) {
        if ($file->isDir()) {
            echo $file->getFilename() . "\n";
        } else {
            echo $file->getFilename() .": Size(".$file->getSize().")\n";
        }
    }