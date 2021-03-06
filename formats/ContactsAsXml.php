<?php

	namespace AccountOnline\formats;

	use AccountOnline\interfaces\format;

	class ContactsAsXml implements format
	{
		public function format(array $data) {

			$contacts = "";

			foreach($data as $obj) {

				$contact = "<Contact ";

				foreach($obj as $key => $val) {

					if($val !== null) {

						$contact .= $key."=\"$val\" ";
					}
				}

				$contacts .= $contact."/>";
			}

			return '<Contacts> '.$contacts.'</Contacts>';
		}
	}