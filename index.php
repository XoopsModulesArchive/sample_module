<?php

// let start including the header of xoops
include '../../mainfile.php'; // including top functions of xoops
$GLOBALS['xoopsOption']['template_main'] = 'sample_index.html'; // this line must be defined BEFORE header.php, otherwise module will get threader like a x1 module (old style)
require XOOPS_ROOT_PATH . '/header.php'; // including the rest
// done, now your own files comes!

// we goto define some vars for fun, in your real module you will ofcourse use things like if ect. all work, still normal file
$example = 'This is var1';
$example2 = 'This is var2';

// to get variables to templates, you should use this method:
    $xoopsTpl->assign('example', $example);
    $xoopsTpl->assign('example2', $example2);
/*
    if you going to build a module for example WITH language files, please follow this sort of defines:
    $xoopsTpl->assign('lang_bla', _SA_BLA);
    $xoopsTpl->assign('lang_bla2', _SA_BLA2);
    ofcourse you will have to define _SA_BLA and _SA_BLA2 in the languages files just like in the x1 modules
    so, you put for example the following in language/english/main.php (wich is xoops is trying to open when opening default page)
    define("_LANG_BLA","Bla");
    and then in template
    $xoopsTpl->assign('lang_bla', _LANG_BLA);
*/

// including footer of xoops
require XOOPS_ROOT_PATH . '/footer.php';
// done
