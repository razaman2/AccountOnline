<?php

	namespace AccountOnline;

	class PurchaseInfo extends AbstractEntity
	{
		public function setCS($cs)
		{
			return ["CS" => $cs];
		}

		public function setRMR($rmr)
		{
			return ["RMR" => $rmr];
		}

		public function setDealerId($dealerId)
		{
			return ["DealerId" => $dealerId];
		}

		public function setUserId($userId)
		{
			return ["UserId" => $userId];
		}

		public function setLastUpdated($lastUpdated)
		{
			return ["LastUpdated" => $lastUpdated];
		}

		public function setSource($source)
		{
			return ["Source" => $source];
		}
	}