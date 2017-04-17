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
	use Phue\Client;
	use Phue\Command\SetLightState;

	require_once __DIR__ . '/vendor/autoload.php';


	if (isset($_GET['colour']))
    {
        if (!isset($_GET['transition']))
        {
			$_GET['transition'] = 0;
        }
		//convert the post value into a hex object.. makes life easy
		$colour = new HEX($_GET['colour']);

		//create a an interface to the hue bridge
		$config = new PhueConfig();
		$hue_client = new Client($config->getHueBridgeIp(), $config->getHueBridgeUser());

		// Setting the RGB and Transition time for the new colour
		$command = new SetLightState($config->getLightId());
		$command->on()
                ->rgb($colour->toRGB()->red(),$colour->toRGB()->green(),$colour->toRGB()->blue())
                ->transitionTime($_GET['transition']);

		// Send the command to the hue bridge and change the colour
		$hue_client->sendCommand(
			$command
		);


		echo "Light set to and RGB of ".$colour->toRGB();
		echo "<hr />";
	}
	else
	{
	    //setup default values.
		$_GET['colour'] = "#ffffff";
		$_GET['transition'] = "3";
	}

	?>
	<form action="index.php" method="get">
		<h1>Pick a colour!</h1>
		<p>
            <label for="colour">Colour:
                <input id="colour" type="color" name="colour" value="<?=$_GET['colour'];?>">
            </label>
        </p>
        <p>
            <label for="transition">Transition:
                <input type="number" id="transition" name="transition" value="<?=$_GET['transition'];?>"  min="0" max="5" />
            </label>
        </p>
        <p>
            <input type="submit">
        </p>
    </form>
	<?
