<?php

	require_once '../vendor/autoload.php';

	$contact = new \AccountOnline\Contact(
		(new \Parser\Parser())->parse('{
		"phone1":"(201) 948-8815",
		"firstname":"bruce",
		"lastname":"wayne",
		"haskeyflag":"Y",
		"authid":"55"
	}'));

	$contact->setContlTypeNo('5001');

	print_r($contact->data());