<?php

	namespace AccountOnline\formats;

	use AccountOnline\interfaces\IFormat;

	class PurchaseInfoAsXml implements IFormat
	{
		public function format(array $data)
		{
			$values = "";

			foreach($data as $obj)
			{
				foreach($obj as $key => $val)
				{
					if($val !== null)
					{
						$values .= "<$key>$val</$key>";
					}
				}
			}

			return '<PurchaseInfo xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">'.$values.'</PurchaseInfo>';
		}
	}