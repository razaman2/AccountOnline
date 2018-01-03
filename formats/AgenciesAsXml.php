<?php

	namespace AccountOnline\formats;

	use AccountOnline\interfaces\format;

	class AgenciesAsXml implements format
	{
		public function format(array $data) {

			$agencies = "";

			foreach($data as $obj) {

				$agency = "<SiteAgencyPermit ";

				foreach($obj as $key => $val) {

					if($val !== null) {

						$agency .= $key."=\"$val\" ";
					}
				}

				$agencies .= $agency."/>";
			}

			return '<SiteAgencyPermits> '.$agencies.'</SiteAgencyPermits>';
		}
	}