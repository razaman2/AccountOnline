<?php

	namespace AccountOnline;

	use Exception;
	use AccountOnline\interfaces\IFormat;
	use AccountOnline\interfaces\IFormattable;

	abstract class AbstractEntity implements IFormattable
	{
		use Formatting;

		protected $collectionOfEntities;

		public function __construct($data = null)
		{
			if(!$data) return;

			$this->create($data);
		}

		protected function outputCollectionOfObjects($collectionOfEntities)
		{
			$entities = $collectionOfEntities;

			if(is_array($collectionOfEntities) || is_object($collectionOfEntities))
			{
				$entities = json_encode($collectionOfEntities);
			}

			return $this->entitiesToObjects($entities);
		}

		protected function entitiesToObjects($entities)
		{
			$collectionOfEntitiesObject = null;

			if(!$collectionOfEntitiesObject = json_decode($entities))
			{
				throw new Exception("Unable to parse the supplied collection of entities.");
			}

			return $collectionOfEntitiesObject;
		}

		protected function create($entities)
		{
			$entities = $this->outputCollectionOfObjects($entities);

			foreach($entities as $entity)
			{
				$record = new $this;

				$instance = new \stdClass();

				foreach($entity as $entityKey => $entityValue)
				{
					$functionName = "set".$entityKey;

					if(method_exists($record,$functionName))
					{
						$result = $this->{$functionName}($entityValue);

						$key = key($result);

						$instance->{$key} = $result[$key];
					}
				}

				$this->collectionOfEntities[] = $instance;
			}
		}

		public function getFormat(IFormat $entityFormat)
		{
			if(count($this->collectionOfEntities) === 0) throw new Exception("Invalid Operation! getFormat() can only be used when passing data through the constructor");

			return $entityFormat->format($this->collectionOfEntities);
		}
	}