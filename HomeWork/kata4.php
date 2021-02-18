<?php

/**
 * Class Person
 */
class Person {

	/**
	 * const SPECIES
	 */
	const SPECIES = 'Homo Sapiens';

	/**
	 * @var string $name
	 */
	public $name;

	/**
	 * @var int $age
	 */
	public $age;

	/**
	 * @var string $occupation
	 */
	public $occupation;

	/**
	 * @return string
	 */
	public function introduce(): string {
		return "Hello, my name is {$this->name}";
	}

	/**
	 * @return string
	 */
	public function describe_job(): string {
		return "I am currently working as a(n) {$this->occupation}";
	}

	/**
	 * @param string $species
	 *
	 * @return string
	 */
	public static function greet_extraterrestrials( string $species ): string {
		return "Welcome to Planet Earth {$species}!";
	}
}