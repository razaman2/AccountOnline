<?php

	namespace AccountOnline;

	class Zone extends AbstractEntity
	{
		public function setZoneName($name) {

			return ["zone_comment" => $name];
		}

		public function setEventType($eventId) {

			return ["event_id" => $eventId];
		}

		public function setEquipLocId($equipLocId) {

			return ["equiploc_id" => $equipLocId];
		}

		public function setDeviceType($equipTypeId) {

			return ["equiptype_id" => $equipTypeId];
		}

		public function setZoneNumber($zoneId) {

			return ["zone_id" => $zoneId];
		}

		public function setZoneStateId($zoneStateId) {

			return ["zonestate_id" => $zoneStateId];
		}
	}