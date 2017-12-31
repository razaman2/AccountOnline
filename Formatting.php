<?php

	namespace AccountOnline;

	trait Formatting
	{
		protected function formatNumbers($input) {

			return preg_replace("/\D/", "", $input);
		}

		protected function stripSpecialChars($input) {

			return preg_replace("/(\W)|(_)/", "", $input);
		}
	}