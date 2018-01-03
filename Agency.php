<?php

	namespace AccountOnline;

	class Agency extends AbstractEntity
	{
		protected $properties = [

			"agencytype_id", "phone1", "agency_no", "agency_name", "city_name", "state_id"
		];

		public function __construct($object) {

			parent::__construct($object);

			$this->setPhoneNumber();
		}
	}