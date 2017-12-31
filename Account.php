<?php

	namespace AccountOnline;

	use AccountOnline\formats\AgenciesAsXml;
	use AccountOnline\formats\ContactsAsXml;
	use AccountOnline\formats\SiteOptionsAsXml;
	use AccountOnline\formats\SiteSystemOptionsAsXml;
	use AccountOnline\formats\SiteSystemsAsXml;
	use AccountOnline\formats\ZonesAsXml;

	class Account
	{
		protected $SiteSystems;
		protected $zones;
		protected $SiteAgencyPermits;
		protected $Contacts;
		protected $SiteOptions;
		protected $SiteSystemOptions;

		public function __construct($siteSystems, $zones, $agencies, $contacts, $siteOptions, $siteSystemOptions)
		{
			$this->SiteSystems = new SiteSystems($siteSystems);
			$this->zones = new Zone($zones);
			$this->SiteAgencyPermits = new Agency($agencies);
			$this->Contacts = new Contact($contacts);
			$this->SiteOptions = new SiteOptions($siteOptions);
			$this->SiteSystemOptions = new SiteSystemOptions($siteSystemOptions);
		}

		public function getAccount()
		{
			$values = $this->SiteSystems->getFormat(new SiteSystemsAsXml())
				.$this->zones->getFormat(new ZonesAsXml())
				.$this->SiteAgencyPermits->getFormat(new AgenciesAsXml())
				.$this->Contacts->getFormat(new ContactsAsXml())
				.$this->SiteOptions->getFormat(new SiteOptionsAsXml())
				.$this->SiteSystemOptions->getFormat(new SiteSystemOptionsAsXml());

			return '<Account xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">'.$values.'</Account>';
		}
	}