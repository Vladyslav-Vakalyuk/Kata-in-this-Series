<?php

/**
 * Class Person
 */
class Person {

	/**
	 * @var string $name
	 */
	protected $name;

	/**
	 * @var int $age
	 */
	protected $age;

	/**
	 * @var string $occupation
	 */
	protected $occupation;

	/**
	 * Person constructor.
	 *
	 * @param string $name
	 * @param int $age
	 * @param string $occupation
	 */
	public function __construct( string $name, int $age, string $occupation ) {
		if ( ! \is_string( $name ) ) {
			throw new \InvalidArgumentException( 'Name must be a string!' );
		}

		if ( ! \is_integer( $age ) && $age < 0 ) {
			throw new \InvalidArgumentException( 'Occupation must be a string!' );
		}

		if ( ! \is_string( $occupation ) ) {
			throw new \InvalidArgumentException( 'Occupation must be a string!' );
		}
		$this->name       = $name;
		$this->age        = $age;
		$this->occupation = $occupation;
	}

	/**
	 * @return string
	 */
	public function get_name(): string {
		return $this->name;
	}

	/**
	 * @return int
	 */
	public function get_age(): int {
		return $this->age;
	}

	/**
	 * @return string
	 */
	public function get_occupation(): string {
		return $this->occupation;
	}

	/**
	 * @param $name
	 */
	public function set_name( string $name ) {
		if ( ! \is_string( $name ) ) {
			throw new \InvalidArgumentException( 'Name must be a string!' );
		}
		$this->name = $name;
	}

	/**
	 * @param int $age
	 */
	public function set_age( int $age ) {
		if ( ! \is_integer( $age ) && $age < 0 ) {
			throw new \InvalidArgumentException( 'Occupation must be a string!' );
		}
		$this->age = $age;
	}

	/**
	 * @param string $occupation
	 */
	public function set_occupation( string $occupation ) {
		if ( ! \is_string( $occupation ) ) {
			throw new \InvalidArgumentException( 'Occupation must be a string!' );
		}
		$this->occupation = $occupation;
	}
}