<?php

	namespace AccountOnline;

	use AccountOnline\interfaces\formattable;

	abstract class AbstractEntity implements formattable
	{
		use Formatting, PhoneNumber;

		protected $properties;

		public function __construct($object) {

			/** @todo
			 * should check @var object that it is of type @class stdClass and throw @class InvalidInputException if
			 * it is not.
			 */

			foreach($this->properties as $property) {

				$this->setClassProperty($object, $this->stripSpecialChars($property));
			}
		}

		protected function setClassProperty($object, $key) {

			if(isset($object->$key)) {

				$this->$key = $object->$key;
			}
		}

		public function data() {

			$data = [];

			foreach($this->properties as $property) {

				$propertyName = $this->stripSpecialChars(strtolower($property));

				if(isset($this->$propertyName)) {

					$data[$property] = $this->$propertyName;
				}
			}

			return $data;
		}
	}