<?php

	namespace AccountOnline;

	class SiteSystemOptions extends AbstractEntity
	{
		protected function create($entities)
		{
			$entities = $this->outputCollectionOfObjects($entities);

			foreach($entities as $key => $val)
			{
				$this->collectionOfEntities[$key] = $val;
			}

			$this->collectionOfEntities = $this->getEntityObj();
		}

		protected function getEntityObj()
		{
			$entityObj = [];

			foreach($this->collectionOfEntities as $entityKey => $entityVal)
			{
				$entityObj[$entityKey] = $entityVal;
			}

			return $entityObj;
		}
	}