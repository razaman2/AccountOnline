<?php

	namespace AccountOnline\formats;

	use AccountOnline\interfaces\format;

	class SiteOptionsAsXml implements format
	{
		public function format(array $data) {

			$values = "";

			foreach($data as $key => $val) {

				$values .= "<SiteOption option_id=\"".strtoupper($key)."\" option_value=\"".strtoupper($val)."\" />";
			}

			return '<SiteOptions>'.$values.'</SiteOptions>';
		}
	}