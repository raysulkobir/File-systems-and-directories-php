<?php
//    print_r(glob("./*", GLOB_MARK));
//    print_r(glob("./*", GLOB_NOSORT));
//    print_r(glob("./*", GLOB_NOCHECK));
//    print_r(glob("./*", GLOB_NOESCAPE));
      print_r(glob("*./{a,b,c}", GLOB_BRACE));
//    print_r(glob("./*", GLOB_ONLYDIR));
//    print_r(glob("./*", GLOB_ERR));