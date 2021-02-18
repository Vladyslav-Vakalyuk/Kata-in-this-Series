<?php

/**
 * Interface CanFly
 */
interface CanFly {
	/**
	 * @return mixed
	 */
	public function fly();
}

/**
 * Interface CanSwim
 */
interface CanSwim {
	/**
	 * @return mixed
	 */
	public function swim();
}

/**
 * Interface CanClimb
 */
interface CanClimb {
	/**
	 * @return mixed
	 */
	public function climb();
}

/**
 * Interface CanGreet
 */
interface CanGreet {
	/**
	 * @param string $name
	 *
	 * @return mixed
	 */
	public function greet( string $name );
}

/**
 * Interface CanIntroduce
 */
interface CanIntroduce {
	/**
	 * @return mixed
	 */
	public function speak();

	/**
	 * @return mixed
	 */
	public function introduce();
}

interface CanSpeak {
	/**
	 * @return mixed
	 */
	public function speak();
}

/**
 * Class Bird
 */
class Bird implements CanFly {
	/**
	 * @var string
	 */
	public $name;

	/**
	 * Bird constructor.
	 *
	 * @param string $name
	 */
	public function __construct( string $name ) {
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function fly(): string {
		return 'I am flying';
	}

	/**
	 * @return string
	 */
	public function chirp(): string {
		return 'Chirp chirp';
	}
}

/**
 * Class Duck
 *
 */
class Duck extends Bird implements CanFly, CanSwim {
	/**
	 * @return string
	 */
	public function chirp(): string {
		return 'Quack quack';
	}

	/**
	 * @return string
	 */
	public function swim(): string {
		return 'Splash! I\'m swimming';
	}
}

/**
 * Class Cat
 */
class Cat implements CanClimb {
	public function climb(): string {
		return 'Look, I\'m climbing a tree';
	}

	/**
	 * @return string
	 */
	public function meow(): string {
		return 'Meow meow';
	}

	/**
	 * @param string $name
	 *
	 * @return string
	 */
	public function play( string $name ): string {
		return "Hey {$name}, let's play!";
	}
}

/**
 * Class Dog
 */
class Dog implements CanSwim, CanGreet {
	public function swim(): string {
		return 'I\'m swimming, woof woof';
	}

	/**
	 * @param string $name
	 *
	 * @return string
	 */
	public function greet( string $name ): string {
		return "Hello {$name}, welcome to my home";
	}

	/**
	 * @return string
	 */
	public function bark(): string {
		return 'Woof woof';
	}
}

/**
 * Class Person
 */
class Person implements CanGreet, CanIntroduce {
	public $name;
	public $age;
	public $occupation;

	/**
	 * Person constructor.
	 *
	 * @param string $name
	 * @param int $age
	 * @param string $occupation
	 */
	public function __construct( string $name, int $age, string $occupation ) {
		$this->name       = $name;
		$this->age        = $age;
		$this->occupation = $occupation;
	}

	/**
	 * @param string $name
	 *
	 * @return string
	 */
	public function greet( string $name ): string {
		return "Hello {$name}, how are you?";
	}

	/**
	 * @return string
	 */
	public function speak(): string {
		return 'What am I supposed to say again?';
	}

	/**
	 * @return string
	 */
	public function introduce(): string {
		return "Hello, my name is {$this->name}, I am {$this->age} years old and I am currently working as a(n) {$this->occupation}";
	}
}