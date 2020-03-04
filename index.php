<?php
function getUserBrowser()
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $ub = '';
    if(preg_match('/MSIE/i',$u_agent))
    {
        $ub = "ie";
    }
    elseif(preg_match('/Firefox/i',$u_agent))
    {
        $ub = "firefox";
    }
    elseif(preg_match('/Safari/i',$u_agent))
    {
        $ub = "safari";
    }
    elseif(preg_match('/Chrome/i',$u_agent))
    {
        $ub = "chrome";
    }
    elseif(preg_match('/Flock/i',$u_agent))
    {
        $ub = "flock";
    }
    elseif(preg_match('/Opera/i',$u_agent))
    {
        $ub = "opera";
    }
   
    return $ub;
}
?>

<?php
switch (getUserBrowser())
{
	case "firefox":
		require "index01.html";
		#echo "firefox";
		break;
	case "ie":
		require "index01.html";
		#echo "ie";
		break;
	case "chrome":
		require "index01.html";
		#echo "chrome";
		break;
	default:
		require "index01.html";
}
?>