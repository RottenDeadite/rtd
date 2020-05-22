<?php
function pad($num) {
	if ($num <= 0) $num = "1";
	if ($num > 36) $num = "36";
	if ($num < 10) $num = "0".$num;
	return $num;
}
// *****************************************************************************
// FUNCTION singledigit($number)
// This functon takes one argument, the integer $number. This function returns
// a string, which is the integer converted to its plain english text
// equivalent. This function differs from doubledigit() because it only accepts
// integers between 0 and 9.
// *****************************************************************************
function singledigit($number) {
    switch($number) {
        case 0:
            $word = "zero";
            break;
        case 1:
            $word = "one";
            break;
        case 2:
            $word = "two";
            break;
        case 3:
            $word = "three";
            break;
        case 4:
            $word = "four";
            break;
        case 5:
            $word = "five";
            break;
        case 6:
            $word = "six";
            break;
        case 7:
            $word = "seven";
            break;
        case 8:
            $word = "eight";
            break;
        case 9:
            $word = "nine";
            break;
    }
    return $word;
}

function doubledigitnumber($number) {
    if($number == 0) {
        $word = "";
    }
    else {
        $word = "-".singledigit($number);
    }       
    return $word;
}
// *****************************************************************************
// FUNCTION doubledigit($number)
// This functon takes one argument, the integer $number. This function returns
// a string, which is the integer converted to its plain english text
// equivalent. This function differs from singledigit() because it assumes that
// $number is greater than 9 but less than 100.
// *****************************************************************************
function doubledigit($number) {
    switch($number[0]) {
        case 0:
            $word = doubledigitnumber($number[1]);
            break;
        case 1:
            switch($number[1]) {
                case 0:$word = "ten";break;
                case 1:$word = "eleven";break;
                case 2:$word = "twelve";break;
                case 3:$word = "thirteen";break;
                case 4:$word = "fourteen";break;
                case 5:$word = "fifteen";break;
                case 6:$word = "sixteen";break;
                case 7:$word = "seventeen";break;
                case 8:$word = "eighteen";break;
                case 9:$word = "ninteen";break;
            }
            break;
        case 2:
            $word = "twenty".doubledigitnumber($number[1]);
            break;                
        case 3:
            $word = "thirty".doubledigitnumber($number[1]);
            break;
        case 4:
            $word = "forty".doubledigitnumber($number[1]);
            break;
        case 5:
            $word = "fifty".doubledigitnumber($number[1]);
            break;
        case 6:
            $word = "sixty".doubledigitnumber($number[1]);
            break;
        case 7:
            $word = "seventy".doubledigitnumber($number[1]);
            break;
        case 8:
            $word = "eighty".doubledigitnumber($number[1]);
            break;
        case 9:
            $word = "ninety".doubledigitnumber($number[1]);
            break;
    }
    return $word;
}

function numberToWord($number){
    $numberlength = strlen($number);
    if ($numberlength === 1) { 
        return singledigit($number);
    } else if ($numberlength === 2) {
        return doubledigit($number);
    }
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
    <link itemprop="url" href="https://en.uesp.net/wiki/Morrowind:The_36_Lessons_of_Vivec" />
    <link rel="icon" type="image/ico" href="../favicon.ico" sizes="16x16" />
    <link rel="icon" type="image/png" href="../favicon32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="../favicon16x16.png" sizes="16x16" />
    <link rel="canonical" href="https://www.newwhirlingschool.com/lessons/<?php echo pad($sermon);?>.php" />
    <meta name="description" content="The New Whirling School, an annotated analysis of Sermon <?php echo pad($sermon); ?> of the 36 Lessons of Vivec." />
    <meta charset="UTF-8" />
    <meta name="author" content="Chris Nelson" />
    <meta name="keywords" content="Elder Scrolls, 36 Lessons of Vivec, Skyrim, Morrowind, Oblivion, Molag Bal, Vivec, Dagoth Ur, Bethesda" />
	<title>The New Whirling School: An annotated analysis of Sermon <?php echo pad($sermon); ?></title>

</head>
<body>
    <div id="modalWrapper" class="modalWrapper" aria-hidden="true">
        <div class="modalContentWrapper">
            <span id="modalClose" class="modalClose"></span>
            <div id="htmlContent" class="htmlContent"></div>
            <div id="modalContent" class="modalContent"></div>
        </div>
    </div>
    <div id="modalBg" class="modalBg"></div>
	<div id="content" class="grid">