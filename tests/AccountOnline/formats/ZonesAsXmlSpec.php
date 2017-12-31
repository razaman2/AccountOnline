<?php

namespace tests\AccountOnline\formats;

use AccountOnline\formats\ZonesAsXml;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ZonesAsXmlSpec extends ObjectBehavior
{
    public function it_is_initializable() {

        $this->shouldHaveType(ZonesAsXml::class);
    }

	public function it_converts_an_array_of_site_options_to_xml() {

		$this->format([['first_name'=>'test1', 'last_name'=>'test2'],['first_name'=>'test3', 'last_name'=>'test4']])->shouldReturn(

			'<Zones> <Zone first_name="test1" last_name="test2" /><Zone first_name="test3" last_name="test4" /></Zones>'
		);
	}
}
