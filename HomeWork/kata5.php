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

/**
 * Class Salesman
 */
class Salesman extends Person {

	/**
	 * @var string
	 */
	public $occupation = 'Salesman';

	/**
	 * Salesman constructor.
	 *
	 * @param string $name
	 * @param int $age
	 */
	public function __construct( string $name, int $age ) {
		$this->name = $name;
		$this->age  = $age;
	}

	/**
	 * @return string
	 */
	public function introduce(): string {
		return parent::introduce() . ", don't forget to check out my products!";
	}
}

/**
 * Class ComputerProgrammer
 */
class ComputerProgrammer extends Person {

	/**
	 * @var string
	 */
	public $occupation = 'Computer Programmer';

	/**
	 * ComputerProgrammer constructor.
	 *
	 * @param string $name
	 * @param int $age
	 */
	public function __construct( string $name, int $age ) {
		$this->name = $name;
		$this->age  = $age;
	}

	/**
	 * @return string
	 */
	public function describe_job(): string {
		return parent::describe_job() . ", don't forget to check out my Codewars account ;)";
	}
}

/**
 * Class WebDeveloper
 */
class WebDeveloper extends ComputerProgrammer {

	/**
	 * @var string
	 */
	public $occupation = 'Web Developer';

	/**
	 * @return string
	 */
	public function describe_job(): string {
		return parent::describe_job() . "And don't forget to check on my website :D";
	}

	/**
	 * @return string
	 */
	public function describe_website(): string {
		return "My professional world-class website is made from HTML, CSS, Javascript and PHP!";
	}
}