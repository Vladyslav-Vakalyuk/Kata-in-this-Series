<?php

/**
 * Class CurrentUSPresident
 */
class CurrentUSPresident {

	/**
	 * @var string
	 */
	public static $name = 'Barack Obama';

	/**
	 * @param $name
	 *
	 * @return string
	 */
	public static function greet( string $name ): string {
		return "Hello {$name}, my name is Barack Obama, nice to meet you!";
	}
}