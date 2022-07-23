<?php
mkdir("test", 0777, true);
file_put_contents("test/test.txt", "Hello World");
sleep(5);

// rmdir("test");

// unlink("test/test.txt");
// rmdir("test");



deleteDir(getcwd().DIRECTORY_SEPARATOR."test");
function deleteDir($path)
{
    $filePath = scandir($path);
    if(count($filePath) > 2){
        foreach($filePath as $file){
            if("." != $file && ".." != $file){
                unlink($path.DIRECTORY_SEPARATOR.$file);
            }
        }
    }

    rmdir($path);
        
}