<?php

	namespace AccountOnline;

	class SiteOptions extends AbstractEntity
	{
		public function __construct($object, $options = []) {

			$this->setOptions($options);

			parent::__construct($object);
		}

		protected function setOptions($options) {

			if(is_array($options) && count($options) > 0) {

				$this->properties = $options;
			}
		}
	}