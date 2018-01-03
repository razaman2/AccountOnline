<?php

	require_once '../vendor/autoload.php';

	$siteoptions = new \AccountOnline\SiteOptions((new \Parser\Parser())->parse('{
		"cmpur":"PUR",
		"contrlen":"12"
	}'), ['cmpur', 'contrlen']);

	print_r($siteoptions->data());