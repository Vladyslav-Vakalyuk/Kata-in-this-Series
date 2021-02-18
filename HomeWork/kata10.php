<?php

$author = new class( 'Donald', '17', 'Male', 'Computer Programmer' ) {
	public $name;
	public $age;
	public $gender;
	public $occupation;

	/**
	 *  constructor.
	 *
	 * @param $name
	 * @param $age
	 * @param $gender
	 * @param $occupation
	 */
	public function __construct( $name, $age, $gender, $occupation ) {
		$this->name       = $name;
		$this->age        = $age;
		$this->gender     = $gender;
		$this->occupation = $occupation;
	}

	/**
	 * @return string
	 */
	public function introduce():string {
		return "{$this->name}, aged {$this->age}, who is a {$this->occupation} proficient in Javascript and PHP and is a PHP enthusiast";
	}
};

$lessons = [
	1  => 'Object-Oriented PHP #1 - Classes, Public Properties and Methods',
	2  => 'Object-Oriented PHP #2 - Class Constructors and $this',
	3  => 'Object-Oriented PHP #3 - Class Constants and Static Methods',
	4  => 'Object-Oriented PHP #4 - People, people, people (Practice)',
	5  => 'Object-Oriented PHP #5 - Classical Inheritance',
	6  => 'Object-Oriented PHP #6 - Visibility',
	7  => 'Object-Oriented PHP #7 - The "Final" Keyword',
	8  => 'Object-Oriented PHP #8 - Interfaces [Advanced]',
	9  => 'Object-Oriented PHP #9 - Abstract Classes [Advanced]',
	10 => 'Object-Oriented PHP #10 - Objects on the Fly [Advanced]',
];

$object_oriented_php = new class( $author, $lessons ) {

	public $description = 'An amazing PHP Kata Series, complete with 10 top-quality Kata containing a large number of both fixed and random tests, that teaches both the fundamentals of object-oriented programming in PHP (in the first 7 Kata of this Series) and more advanced OOP topics in PHP (in the last 3 Kata of this Series) such as interfaces, abstract classes and even anonymous classes in a way that stimulates critical thinking and encourages independent research';
	public $kata_list;
	public $kata_count = 10;
	public $author;

	/**
	 * @param stdClass $author
	 * @param array $lessons
	 */
	public function __constructor( stdClass $author, array $lessons ) {
		$this->kata_list = $lessons;
		$this->author    = ( $author->introduce )();
	}

	/**
	 * @param string $name
	 *
	 * @return string
	 */
	public function advertise( string $name ):string {
		return "Hey {$name}, don't forget to check out this great PHP Kata Series authored by Donald called \"Object-Oriented PHP\"";
	}

	/**
	 * @param int $kata_number
	 *
	 * @return mixed|string
	 */
	public function get_kata_by_number( int $kata_number ):string {
		if ( ! \is_integer( $kata_number ) && ( $kata_number < 1 && $kata_number > 10 ) ) {
			throw new InvalidArgumentException( $kata_number . 'Is not an integer or not due from 1 to 10' );
		}

		return isset( $this->kata_list[ $kata_number ] ) ? $this->kata_list[ $kata_number ] : '';
	}

	/**
	 * @return string
	 */
	public function complete():string {
		return "Hooray, I've finally completed the entire \"Object-Oriented PHP\" Kata Series!!!";
	}

	/**
	 * @return string
	 */
	public function __toString() {
		return $this->description;
	}
};

echo $object_oriented_php;