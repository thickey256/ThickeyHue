<?php
/**
 * Created by PhpStorm.
 * User: thickey
 * Date: 11/04/2017
 * Time: 9:41 PM
 */
namespace ThickeyHue;

use ThickeyHue\Service\PhueConfig;
use Phue\Client;
use Phue\Command\SetLightState;

require_once __DIR__ . '/vendor/autoload.php';

$config = new PhueConfig();
$hue_client = new Client($config->getHueBridgeIp(), $config->getHueBridgeUser());


echo 'Starting RGB effect.', "\n";
$transitionTime = 3;
while (true)
{

	// Send command
	$command = new SetLightState($config->getLightId());
	$command->brightness(255)
        	->rgb(rand(0,255),rand(0,255), rand(0,255))
        	->transitionTime($transitionTime);
	$hue_client->sendCommand($command);

	//do nothing for the next x seconds while the light transitions
    sleep($transitionTime);
}
