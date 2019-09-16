<?php

/**
 * Plugin Name: timedifference
 * Plugin URI: http://www.mywebsite.com/my-first-plugin
 * Description: Determines the time depending on timezone
 * Version: 1.0
 * Author: Steven Curnow
 * Author URI: codexx1.000webhostapp.com
 */

/*$currTime = date('H:i:s', time()); //local time
echo $currTime;
echo "</br>";
`
$dateFormat="H:i:s";
$gmt = gmdate($dateFormat, time()); //GMT
echo $gmt;

$diff = $currTime - $gmt;
echo $diff;*/

add_action( 'wp_enqueue_scripts', 'displayHTMLpage' );

function displayHTMLpage() {
    include( 'index.html' );
}

$dateFormat="H:i:s";
$gmt = gmdate($dateFormat, time());

echo $gmt;

if(isset($_POST['timezone']))
{
$timezone = $_POST['timezone'];
echo "<br />";
echo date('H:i:s', strtotime("{$timezone} hours"));
}

?>