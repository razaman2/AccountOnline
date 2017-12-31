<?php

	namespace AccountOnline;

	class CreditRequest extends AbstractEntity
	{
		public function setCS($CS)
		{
			return ["CS" => $CS];
		}

		public function setSSN($SSN)
		{
			return ["SSN" => $this->formatNumbers($SSN)];
		}

		public function setFirstName($FirstName)
		{
			return ["FirstName" => $FirstName];
		}

		public function setLastName($LastName)
		{
			return ["LastName" => $LastName];
		}

		public function setStreetNumber($StreetNumber)
		{
			return ["StreetNumber" => $StreetNumber];
		}

		public function setStreetName($StreetName)
		{
			return ["StreetName" => $StreetName];
		}

		public function setCity($City)
		{
			return ["City" => $City];
		}

		public function setState($State)
		{
			return ["State" => $State];
		}

		public function setZip($Zip)
		{
			return ["Zip" => $Zip];
		}

		public function setDealerId($DealerId)
		{
			return ["DealerId" => $DealerId];
		}

		public function setUserId($UserId)
		{
			return ["UserId" => $UserId];
		}

		public function setFICO($FICO)
		{
			return ["FICO" => $FICO];
		}

		public function setRequestDate($RequestDate)
		{
			return ["RequestDate" => $RequestDate];
		}

		public function setTransactionID($TransactionID)
		{
			return ["TransactionID" => $TransactionID];
		}

		public function setToken($Token)
		{
			return ["Token" => $Token];
		}

		public function setBureauID($BureauID)
		{
			$creditBureau = ["TU" => "1", "EFX" => "5", "XPN" => "7"];

			return ["BureauID" => $creditBureau[$BureauID]];
		}
	}