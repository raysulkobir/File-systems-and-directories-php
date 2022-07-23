<?php
mkdir("test/d1/d2", 0777, true);
file_put_contents("test/f.txt", "Hello World");
file_put_contents("test/d1/f.txt", "Hello World");
file_put_contents("test/d1/d2/f.txt", "Hello World");
 
sleep(5);

// rmdir("test");

// unlink("test/test.txt");
// rmdir("test");



deleteDir(getcwd().DIRECTORY_SEPARATOR."test");
function deleteDir($path)
{
    if(!is_readable($path)){
        return;
    }
    $filePath = scandir($path);
    if(count($filePath) > 2){
        foreach($filePath as $file){
            if("." != $file && ".." != $file){
                $rFile = $path.DIRECTORY_SEPARATOR.$file;
                if(is_dir($rFile)){
                    deleteDir($rFile);
                }else{
                    unlink($rFile);
                }
            }
        }
    }

    rmdir($path);
}