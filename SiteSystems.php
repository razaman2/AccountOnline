<?php

	namespace AccountOnline;

	class SiteSystems extends AbstractEntity
	{
//		protected $cspartNo = "350";
//		protected $ext1 = "999";
//		protected $ext2 = "999";
//		protected $mapCoord = "12345";
//		protected $mapPage = "8";

		public function setCityName($cityName)
		{
			return ["city_name" => $cityName];
		}

		public function setCodeword($codeword1)
		{
			return ["codeword1" => $codeword1];
		}

		public function setCountyName($countyName)
		{
			return ["county_name" => $countyName];
		}

		public function setCrossStreet($crossStreet)
		{
			return ["cross_street" => $crossStreet];
		}

		public function setInstallServcoNo($installServcoNo)
		{
			return ["install_servco_no" => $installServcoNo];
		}

		public function setLangId($langId)
		{
			return ["lang_id" => $langId];
		}

		public function setPhone1($phone1)
		{
			return ["phone1" => $this->formatNumbers($phone1)];
		}

		public function setServcoNo($servcoNo)
		{
			return ["servco_no" => $servcoNo];
		}

		public function setSiteAddr1($siteAddr1)
		{
			return ["site_addr1" => $siteAddr1];
		}

		public function setSiteName($siteName)
		{
			/**
			 * strip or format special chars from site name
			 */
			return ["site_name" => ucwords(strtolower(htmlspecialchars($siteName)))];
		}

		public function setSitestatId($sitestatId)
		{
			return ["sitestat_id" => $sitestatId];
		}

		public function setSitetypeId($sitetypeId)
		{
			return ["sitetype_id" => $sitetypeId];
		}

		public function setStateId($stateId)
		{
			return ["state_id" => $stateId];
		}

		public function setSystypeId($systypeId)
		{
			return ["systype_id" => $systypeId];
		}

		public function setSecSystypeId($secSystypeId)
		{
			return ["sec_systype_id" => $secSystypeId];
		}

		public function setTwowayDeviceId($twowayDeviceId)
		{
			return ["twoway_device_id" => $twowayDeviceId];
		}

		public function setSubdivision($subdivision)
		{
			return ["subdivision" => $subdivision];
		}

		public function setReceiverPhone($receiverPhone)
		{
			return ["receiver_phone" => $this->formatNumbers($receiverPhone)];
		}

		public function setPanelPhone($panelPhone)
		{
			return ["panel_phone" => $this->formatNumbers($panelPhone)];
		}

		public function setPanelLocation($panelLocation)
		{
			return ["panel_location" => $panelLocation];
		}

		public function setInstallDate($installDate)
		{
			return ["install_date" => $installDate];
		}

		public function setPanelCode($panelCode)
		{
			return ["panel_code" => $panelCode];
		}

		public function setZipCode($zipCode)
		{
			return ["zip_code" => $zipCode];
		}
	}