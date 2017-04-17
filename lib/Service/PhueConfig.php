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
		$this->hueBridgeIp = '192.168.0.237';
		$this->hueBridgeUser = 'P1vkrJVdhBb89voEfAL1GC9megdBhnel4jt5Wo06';
		$this->lightId = 12;
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