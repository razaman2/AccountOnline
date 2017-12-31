<?php

	namespace AccountOnline;

	class Contact extends AbstractEntity
	{
		protected $properties = [

			"first_name", "pin", "last_name", "ctactype_id", "relation_id", "auth_id", "contract_signer_flag", "has_key_flag", "phone1", "phonetype_id1", "contltype_no"
		];

		public function __construct($object, \Parser\Parser $parser) {

			parent::__construct($object, $parser);

			$this->setPhoneNumber();
		}

		public $contractsignerflag = 'N';

		public $haskeyflag = 'N';
	}