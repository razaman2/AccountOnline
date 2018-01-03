<?php

	namespace AccountOnline;

	class Contact extends AbstractEntity
	{
		protected $properties = [

			"first_name", "pin", "last_name", "ctactype_id", "relation_id", "auth_id", "contract_signer_flag", "has_key_flag", "phone1", "phonetype_id1", "contltype_no"
		];

		public function __construct($object) {

			parent::__construct($object);

			$this->setPhoneNumber();
		}

		public $contractsignerflag = 'N';

		public $haskeyflag = 'N';

		public function setContlTypeNo($value) {

			$values = ['5000', '5001'];

			if(!in_array($value, $values)) {

				throw new \Exception('invalid contl type no, must be one of '.implode(', ', $values));
			}

			$this->contltypeno = $value;
		}
	}