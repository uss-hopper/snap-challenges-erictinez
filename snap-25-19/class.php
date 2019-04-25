<?php

namespace Emartinez451\ClassSnapChallenge;

class User {
	use ValidateUuid;
	/**
	 * id for this User: this is the primary key
	 * @var Uuid $userId
	 **/
	/**
	 * accessor method for userId
	 */

	public function getUserId(): Uuid {
		return ($this->userId);

		/**
		 * mutator method for user id
		 *
		 * @param Uuid| string $newUserId value of new user id
		 * @throws \RangeException if $newUserId value is not positive
		 * @throws \TypeError if the user id is not
		 **/

		public function setUserId( $newUserId): void {
			try {
				$uuid = self::validateUuid($newUserId);
			} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {

				$exceptionType = get_class($exception);
				throw(new $exceptionType($exception->getMessage(), 0, $exception));
			}
			// convert and store the user id
			$this->userId = $uuid;
		}


<?php
class foo (
	private $bar;
	private $baz;

	public function__construct($newBar, $new Baz){
		$this->setBar($newBar);
		$this->setBaz($newBaz);
	}

	public function getBar() : string {
		return $thisBar;
	}

	public function getBaz() : int {
	return $this->Baz;}
	}

	public function setBaz($newbaz) : void {
		$this->baz = $newBaz;
	}

	public function concat() : string {
		return $this->bar . (string)$this->baz;
	}
}
$foo = new Foo("string", 12345);
echo $foo->concat();
