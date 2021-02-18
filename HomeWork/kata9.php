<?php

/**
 * Class Person
 */
abstract class Person {

	/**
	 * @var
	 */
	public $name;

	/**
	 * @var
	 */
	public $age;

	/**
	 * @var
	 */
	public $gender;

	/**
	 * @return mixed
	 */
	public abstract function introduce();

	/**
	 * @param string $name
	 *
	 * @return string
	 */
	public function greet( string $name ) {
		return "Hello {$name}";
	}

}

/**
 * Class Child
 */
final class Child extends Person {

	/**
	 * @var
	 */
	public $name;

	/**
	 * @var
	 */
	public $age;

	/**
	 * @var
	 */
	public $gender;

	/**
	 * @var
	 */
	public $aspirations;

	/**
	 * @param string $name
	 * @param int $age
	 * @param string $gender
	 * @param $aspirations
	 */
	public function __constructor( string $name, int $age, string $gender, $aspirations ) {
		$this->name        = $name;
		$this->age         = $age;
		$this->gender      = $gender;
		$this->aspirations = $aspirations;
	}

	/**
	 * @return string
	 */
	public function introduce(): string {
		return "Hi, I'm {$this->name} and I am {$this->age} years old";
	}

	/**
	 * @param string $name
	 *
	 * @return string
	 */
	public function greet( string $name ): string {
		return "Hi {$name}, let's play!";
	}

	/**
	 * @return string
	 */
	public function say_dreams(): string {
		return "I would like to be a(n) {$this->aspirations} when I grow up.";
	}


}

/**
 * Class ComputerProgrammer
 */
class ComputerProgrammer extends Person {
	public $name;
	public $age;
	public $gender;
	public $occupation = 'Computer Programmer';

	/**
	 * @return string
	 */
	public function introduce(): string {
		return "Hello, my name is {$this->name}, I am {$this->age} years old and I am a(n) {$this->occupation}";
	}

	/**
	 * @param string $name
	 *
	 * @return string
	 */
	public function greet( string $name ): string {
		return "Hello {$name}, I'm {$this->name}, nice to meet you";
	}

	/**
	 * @return string
	 */
	public function advertise() {
		return 'Don\'t forget to check out my coding projects';
	}
}
