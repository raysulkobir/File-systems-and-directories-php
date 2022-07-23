<?php
    $dri = "F:\laragon\www\php_advanced\File systems and directories php\14.7 - Some cool uses of the pathinfo() function.php";

    // echo pathinfo($dri)["dirname"]."\n";
    // echo pathinfo($dri, PATHINFO_DIRNAME)."\n";
    // echo pathinfo($dri, PATHINFO_BASENAME)."\n";
    // echo pathinfo($dri, PATHINFO_FILENAME)."\n";
    echo pathinfo($dri, PATHINFO_EXTENSION)."\n";