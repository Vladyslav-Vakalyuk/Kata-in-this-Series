<?php

/**
 * Class President
 */
class President {

	/**
	 * @var string
	 */
	public $name = 'Barack Obama';

	/**
	 * @param $name
	 *
	 * @return string
	 */
	public function greet( string $name ): string {
		return "Hello {$name}, my name is Barack Obama, nice to meet you!";
	}
}

$us_president             = new President();
$president_name           = $us_president->name;
$greetings_from_president = $us_president->greet( 'Donald' );