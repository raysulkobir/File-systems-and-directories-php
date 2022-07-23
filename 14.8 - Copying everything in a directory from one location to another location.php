<?php
    function copyDir($source, $destination){
        $source = rtrim($source, "/");
    
        $destination = rtrim($destination, "/");

        if(!file_exists($destination)){
            mkdir($destination);
        }

        print_r(scandir($source));
        

        foreach(scandir($source) as $file){
            if("." != $file && ".." != $file){
                echo $source;
                exit;
                if(is_dir($source."/".$file)){
                    copyDir($source."/".$file, $destination."/".$file);
                }else{
                    copy($source."/".$file, $destination."/".$file);
                }
            }
        }

    }

    $s = getcwd(). "/File systems and directories php/test2";
    $d = getcwd(). "/File systems and directories php/target";
    copyDir($s, $d);