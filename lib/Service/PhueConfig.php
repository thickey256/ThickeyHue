<?php
/**
 * Created by PhpStorm.
 * User: thickey
 * Date: 14/04/2017
 * Time: 4:35 PM
 */

namespace ThickeyHue\Service;


class PhueConfig
{
	private $hueBridgeIp;
	private $hueBridgeUser;
	private $lightId;

	function __construct()
	{
		/**
		 * These values are local specific.
		 * And probably should NOT be committed to github in a real world situation
		 * But as this is just a demo it's not a problem.
		*/
		$this->hueBridgeIp = '192.168.2.2';
		$this->hueBridgeUser = 'AwaBJXwdYP5ttW78HWSPO2zu5rnW6NFoQtzFnm-9';
		$this->lightId = 4;
	}

	/**
	 * @return float
	 */
	public function getHueBridgeIp()
	{
		return $this->hueBridgeIp;
	}

	/**
	 * @return string
	 */
	public function getHueBridgeUser()
	{
		return $this->hueBridgeUser;
	}

	/**
	 * @return mixed
	 */
	public function getLightId()
	{
		return $this->lightId;
	}




}