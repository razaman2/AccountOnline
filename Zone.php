<?php

	namespace AccountOnline;

	class Zone extends AbstractEntity
	{
		protected $properties = [

			"zone_comment", "event_id", "equiploc_id", "equiptype_id", "zone_id", "zonestate_id"
		];

		public $equiplocid = 'OTHR';

		public $zonestateid = 'A';
	}