<?php

/**
 * Class Person
 */
class Person {
	/**
	 * @var string $first_name
	 */
	public $first_name;

	/**
	 * @var string $last_name
	 */
	public $last_name;

	/**
	 * Person constructor.
	 *
	 * @param $first_name
	 * @param $last_name
	 */
	public function __construct( string $first_name, string $last_name ) {
		$this->first_name = $first_name;
		$this->last_name  = $last_name;
	}

	/**
	 * @return string
	 */
	public function get_full_name(): string {
		return $this->first_name . ' ' . $this->last_name;
	}
}