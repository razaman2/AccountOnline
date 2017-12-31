<?php

	namespace AccountOnline;

	class Agency extends AbstractEntity
	{
		public function setId($agencyTypeId) {

			return ["agencytype_id" => $agencyTypeId];
		}

		public function setPhone($phone1) {

			return ["phone1" => $this->formatNumbers($phone1)];
		}

		public function setNumber($agencyNo) {

			return ["agency_no" => $agencyNo];
		}

		public function setName($agencyName) {

			return ["agency_name" => $agencyName];
		}

		public function setCityName($cityName) {

			return ["city_name" => $cityName];
		}

		public function setStateId($stateId) {

			return ["state_id" => $stateId];
		}
	}