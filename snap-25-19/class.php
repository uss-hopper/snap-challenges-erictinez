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