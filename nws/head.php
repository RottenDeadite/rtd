<?php
function getHeader($title = 'The New Whirling School, an annotated analysis of the 36 Lessons of Vivec', $css = 'css/index.css', $canon = 'https://www.newwhirlingschool.com/index.php') {
    $html = '';
    $html .= '<!DOCTYPE html>';
    $html .= '<html lang="en">';
    $html .= '<head>';
    $html .= '<title>'.$title.'</title>';
    $html .= '<meta charset="UTF-8">';
    $html .= '<meta name=viewport content="width=device-width, initial-scale=1">';
    $html .= '<meta name="author" content="Chris Nelson" />';
    $html .= '<meta name="keywords" content="Elder Scrolls, 36 Lessons of Vivec, Skyrim, Morrowind, Oblivion, Molag Bal, Vivec, Dagoth Ur, Bethesda" />';
    $html .= '<meta name="description" content="'.$title.'" />';
    $html .= '<link href="//fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">';
    $html .= '<link href="//fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">';
    $html .= '<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>';
    $html .= '<link rel="stylesheet" type="text/css" media="all" href="'.$css.'" />';
    $html .= '<link rel="icon" type="image/ico" href="//www.newwhirlingschool.com/favicon.ico" sizes="16x16" />';
    $html .= '<link rel="icon" type="image/png" href="//www.newwhirlingschool.com/favicon32x32.png" sizes="32x32" />';
    $html .= '<link rel="icon" type="image/png" href="//www.newwhirlingschool.com/favicon16x16.png" sizes="16x16" />';
    $html .= '<link rel="canonical" href="'.$canon.'" />';
    $html .= '<script>';
    $html .= 'var b = document.documentElement;';
    $html .= "b.setAttribute('data-useragent',  navigator.userAgent);";
    $html .= "b.setAttribute('data-platform', navigator.platform );";
    $html .= "b.className += ((!!('ontouchstart' in window) || !!('onmsgesturechange' in window))?' touch':'');";
    $html .= '</script>';
    $html .= '</head>';
    return $html;
}