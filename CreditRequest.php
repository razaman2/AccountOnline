<?php

	namespace AccountOnline;

	class CreditRequest extends AbstractEntity
	{
		protected $properties = [
			"CS", "SSN", "FirstName", "LastName", "StreetNumber", "StreetName", "City", "State", "Zip", "DealerId", "UserId", "FICO", "RequestDate", "TransactionID", "Token", "BureauID"
		];

		public function __construct($object, \Parser\Parser $parser) {

			parent::__construct($object, $parser);

			if(isset($this->BureauID)) {

				$this->setBureauId();
			}

			if(isset($this->SSN)) {

				$this->setSsn();
			}
		}

		protected function setBureauId() {

			$creditBureau = ["tu" => "1", "efx" => "5", "xpn" => "7"];

			$this->{'BureauID'} = $creditBureau[strtolower($this->{'BureauID'})];
		}

		protected function setSsn() {

			$this->{'SSN'} = $this->formatNumbers($this->{'SSN'});
		}
	}