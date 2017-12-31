<?php

	namespace AccountOnline;

	class Contact extends AbstractEntity
	{
		public function setFirstName($firstName) {

			return ["first_name" => $firstName];
		}

		public function setPasscode($pin) {

			return ["pin" => $pin];
		}

		public function setLastName($lastName) {

			return ["last_name" => $lastName];
		}

		public function setContactType($contactTypeId) {

			return ["ctactype_id" => $contactTypeId];
		}

		public function setRelationship($relationId)
		{
			return ["relation_id" => $relationId];
		}

		public function setAuthorityLevel($authId) {

			return ["auth_id" => $authId];
		}

		public function setSigner($contractSignerFlag) {

			return ["contract_signer_flag" => ($contractSignerFlag) ? "Y" : "N"];
		}

		public function setHasKey($hasKeyFlag) {

			return ["has_key_flag" => ($hasKeyFlag) ? "Y" : "N"];
		}

		public function setPhoneNumber($phone1) {

			return ["phone1" => $this->formatNumbers($phone1)];
		}

		public function setPhoneType($phoneTypeId1) {

			return ["phonetype_id1" => $phoneTypeId1];
		}

		public function setEnhanced($contlTypeNo) {

			return ["contltype_no" => $contlTypeNo];
		}
	}