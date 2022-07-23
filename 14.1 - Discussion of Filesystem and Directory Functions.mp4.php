<?php
// https://www.php.net/manual/en/ref.filesystem.php
    // echo getcwd();

    // $files = scandir(getcwd());
    // foreach($files as $file)
    // {
    //     if("." != $file && ".." != $file){
    //        if(is_dir($file)){
    //            echo "[d] {$file} \n";
    //           }else{
    //             echo "[f] {$file} \n";
    //           }
    //     } 
        
    // }

    // function countDir($files){
    //     $count = 0;
    //     foreach($files as $file)
    //     {
    //         if("." != $file && ".." != $file){
    //             if(is_dir($file)){
    //                  $count ++;
    //             } 
    //         } 
        
    //     }

    //     return $count;
    // }

    // echo countDir(scandir(getcwd()));


    $entrees = opendir(getcwd());
        
    while($entry = readdir($entrees)){
        echo $entry."\n";
    };

 