<?php

	namespace AccountOnline;

	use AccountOnline\interfaces\formattable;

	abstract class AbstractEntity implements formattable
	{
		use Formatting, PhoneNumber;

		protected $properties = [];

		public function __construct(\Parser\ParserDataObject $object) {

			foreach($this->properties as $property) {

				$this->setClassProperty($object,$property);
			}
		}

		protected function setClassProperty($object, $property) {

			$property = $this->stripSpecialChars($property);

			if(isset($object->$property)) {

				$this->$property = $object->$property;
			}
		}

		public function data() {

			foreach($this->properties as $property) {

				$propertyName = $this->stripSpecialChars($property);

				$propertyName = strtolower($propertyName);

				if(property_exists($this,$propertyName)) {

					$data[$property] = $this->$propertyName;
				}
			}

			return $data ?? [];
		}
	}