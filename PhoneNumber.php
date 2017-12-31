<?php

	namespace AccountOnline;

	trait PhoneNumber
	{
		protected function setPhoneNumber($property = null) {

			if(isset($property)) {

				$this->$property = $this->formatNumbers($this->$property);
			} elseif(isset($this->{'phone1'})) {

				$this->{'phone1'} = $this->formatNumbers($this->{'phone1'});
			}
		}
	}