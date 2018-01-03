<?php

namespace tests\AccountOnline\formats;

use AccountOnline\formats\SiteSystemsAsXml;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SiteSystemsAsXmlSpec extends ObjectBehavior
{
    public function it_is_initializable() {

        $this->shouldHaveType(SiteSystemsAsXml::class);
    }

	public function it_converts_an_array_of_site_system_to_xml() {

		$this->format([['first_name'=>'test1', 'last_name'=>'test2']])->shouldReturn(

			'<SiteSystems> <SiteSystem first_name="test1" last_name="test2" /></SiteSystems>'
		);
	}

	public function it_implements_iformat_interface() {

		$this->shouldImplement(\AccountOnline\interfaces\format::class);
	}
}
