<?php

	namespace AccountOnline\formats;

	use AccountOnline\interfaces\format;

	class CreditRequestAsXml implements format
	{
		public function format(array $data) {

			$values = "";

			foreach($data as $obj) {

				foreach($obj as $key => $val) {

					if($val !== null) {

						$values .= "<$key>$val</$key>";
					}
				}
			}

			return '<CreditRequest xmlns:i="http://www.w3.org/2001/XMLSchema-instance" xmlns="http://schemas.datacontract.org/2004/07/CreditReporting.DataController">'.$values.'</CreditRequest>';
		}
	}