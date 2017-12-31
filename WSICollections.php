<?php

	namespace AccountOnline;

	use AccountOnline\interfaces\IFormat;
	use AccountOnline\interfaces\IGetCollection;
	use AccountOnline\interfaces\IModifyCollection;

	class WSICollections implements IModifyCollection, IGetCollection
	{
		protected $entity;
		protected $format;
		protected $collectionOfEntities = [];

		public function __construct(IFormat $format)
		{
			$this->format = $format;
		}

		public function add(AbstractEntity $entity)
		{
			$this->collectionOfEntities[] = $entity;

			return $this;
		}

		public function remove(AbstractEntity $entity)
		{
			$amountOfEntitiesInCollection = count($this->collectionOfEntities);

			$indexOfEntityToRemove = array_search($entity, $this->collectionOfEntities);

			unset($this->collectionOfEntities[$indexOfEntityToRemove]);

			if(count($this->collectionOfEntities) == $amountOfEntitiesInCollection)
			{
				throw new \Exception("Unable to remove entity, entity not found in collection");
			}

			return $this;
		}

		public function update(AbstractEntity $entity)
		{
			$indexOfEntityToUpdate = array_search($entity, $this->collectionOfEntities);

			return $this->collectionOfEntities[$indexOfEntityToUpdate];
		}

		public function getAll()
		{
			return $this->format->format();
		}
	}