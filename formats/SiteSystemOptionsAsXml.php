<?php

	namespace AccountOnline\formats;

	use AccountOnline\interfaces\format;

	class SiteSystemOptionsAsXml implements format
	{
		public function format(array $data) {

			$values = "";

			foreach($data as $key => $val) {

				$values .= "<SiteSystemOption option_id=\"".strtoupper($key)."\" option_value=\"".strtoupper($val)."\" />";
			}

			return '<SiteSystemOptions>'.$values.'</SiteSystemOptions>';
		}
	}