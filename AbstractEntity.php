<?php

	namespace AccountOnline;

	use Exception;
	use AccountOnline\interfaces\IFormat;
	use AccountOnline\interfaces\IFormattable;

	abstract class AbstractEntity implements IFormattable
	{
		use Formatting, PhoneNumber;

		protected $object;

		protected $properties;

		public function __construct($object, \Parser\Parser $parser) {

			$this->object = $parser->parse($object);

			foreach($this->properties as $property) {

				$this->addKeyToObject($this->stripSpecialChars($property));
			}
		}

		protected function addKeyToObject($key) {

			if(isset($this->object->$key)) {

				$this->$key = $this->object->$key;
			}
		}

		protected function create($entities) {

			foreach($entities as $entity) {

				$record = new $this;

				$instance = new \stdClass();

				foreach($entity as $entityKey => $entityValue) {

					$functionName = "set".$entityKey;

					if(method_exists($record,$functionName)) {

						$result = $this->{$functionName}($entityValue);

						$key = key($result);

						$instance->{$key} = $result[$key];
					}
				}

				$this->collectionOfEntities[] = $instance;
			}
		}

		public function getFormat(IFormat $entityFormat) {

			if(count($this->collectionOfEntities) === 0) {

				throw new Exception("Invalid Operation! getFormat() can only be used when passing data through the constructor");
			}

			return $entityFormat->format($this->collectionOfEntities);
		}
	}