<?php

	namespace AccountOnline\devices;

	class LuxCameras
	{
		protected $quantity = 0;
		protected $mac;
		protected $unit;
		protected $systems = ['LUXDVR'=>'4CHAN'];

		public function __construct($data)
		{
			$data = $this->outputCollectionOfObjects($data);
			$this->quantity = $data->quantity;
			$this->mac = $data->mac;
			$this->unit = $data->unit;
		}

		public function get()
		{
			$errors = $this->validate();

			return ['LUXCAMERAS'=>$this->quantity, 'LUXDVR'=>$this->unit, 'LUXMAC'=>$this->mac];
		}

		protected function validate()
		{
			collect([$this->quantity, $this->mac, $this->unit])->each(function($item){
				dump($item);
			});
//			$errors = [];
//			$errors .= $this->quantity ? '' : array_push($errors, 'max of 4 cameras allowed');
//			$errors .= preg_match('/^\w{8}$/i', $this->mac) ? '' : array_push($errors, 'invalid mac accress');
//			$errors .= in_array($this->unit, $this->systems) ? '' : 'invalid system type;';
//
//			return explode(';', $errors) ?? exit;
		}
		// make sure only 4 cameras can be added

		protected function outputCollectionOfObjects($collectionOfEntities)
		{
			$entities = $collectionOfEntities;

			if(is_array($collectionOfEntities) || is_object($collectionOfEntities))
			{
				$entities = json_encode($collectionOfEntities);
			}

			return $this->entitiesToObjects($entities);
		}

		protected function entitiesToObjects($entities)
		{
			$collectionOfEntitiesObject = null;

			if(!$collectionOfEntitiesObject = json_decode($entities))
			{
				throw new Exception("Unable to parse the supplied collection of entities.");
			}

			return $collectionOfEntitiesObject;
		}
	}