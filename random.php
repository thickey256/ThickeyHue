<?php
/**
 * Created by PhpStorm.
 * User: thickey
 * Date: 11/04/2017
 * Time: 9:41 PM
 */
namespace ThickeyHue;

use ThickeyHue\Service\PhueConfig;
use Scriptura\Color\Types\HEX;

require_once __DIR__ . '/vendor/autoload.php';

$config = new PhueConfig();
$hue_client = new \Phue\Client($config->getHueBridgeIp(), $config->getHueBridgeUser());

//The ID number of the bulb we want to use (use the getLights() function to list them!
$light = 12;

echo 'Starting RGB effect.', "\n";
$transitionTime = 3;
while (true) {


    
    // Send command
    
    $x = new \Phue\Command\SetLightState($config->getLightId());
    $y = $x->brightness(255)
        ->rgb(rand(0,255),rand(0,255), rand(0,255))
        ->transitionTime($transitionTime);
	$hue_client->sendCommand($y);
    
    // Sleep for transition time plus extra for request time
    sleep($transitionTime);
}
