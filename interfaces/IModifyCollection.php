<?php

	namespace AccountOnline\interfaces;

	use AccountOnline\AbstractEntity;

	interface IModifyCollection
	{
		public function add(AbstractEntity $entity);
		public function remove(AbstractEntity $entity);
		public function update(AbstractEntity $entity);
	}