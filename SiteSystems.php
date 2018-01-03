<?php

	namespace AccountOnline;

	class SiteSystems extends AbstractEntity
	{
		protected $properties = [
			"city_name", "codeword1", "county_name", "cross_street", "install_servco_no", "lang_id", "phone1", "servco_no", "site_addr1", "site_name", "sitestat_id", "sitetype_id", "state_id", "systype_id", "sec_systype_id", "twoway_device_id", "subdivision", "receiver_phone", "panel_phone", "panel_location", "install_date", "panel_code", "zip_code", "cspart_no", "ext1", "ext2", "map_coord", "map_page"
		];

		public function __construct($object) {

			parent::__construct($object);

			if(isset($this->{'sitename'})) {

				$this->setSiteName();
			}

			if(isset($this->{'phone1'})) {

				$this->setPhoneNumber();
			}

			if(isset($this->{'receiverphone'})) {

				$this->setPhoneNumber('receiverphone');
			}

			if(isset($this->{'panelphone'})) {

				$this->setPhoneNumber('panelphone');
			}
		}

		protected function setSiteName() {

			$this->{'sitename'} = ucwords(strtolower(htmlspecialchars($this->{'sitename'})));
		}
	}