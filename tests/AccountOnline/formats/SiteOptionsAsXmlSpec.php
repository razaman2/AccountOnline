<?php

namespace tests\AccountOnline\formats;

use AccountOnline\formats\SiteOptionsAsXml;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SiteOptionsAsXmlSpec extends ObjectBehavior
{
    public function it_is_initializable() {

        $this->shouldHaveType(SiteOptionsAsXml::class);
    }

	public function it_converts_an_array_of_site_options_to_xml() {

		$this->format(['first_name'=>'test1', 'last_name'=>'test2'])->shouldReturn(

			'<SiteOptions><SiteOption option_id="FIRST_NAME" option_value="TEST1" /><SiteOption option_id="LAST_NAME" option_value="TEST2" /></SiteOptions>'
		);
	}

	public function it_implements_iformat_interface() {

		$this->shouldImplement(\AccountOnline\interfaces\format::class);
	}
}
