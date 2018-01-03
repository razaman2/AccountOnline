<?php

namespace tests\AccountOnline\formats;

use AccountOnline\formats\SiteSystemOptionsAsXml;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SiteSystemOptionsAsXmlSpec extends ObjectBehavior
{
    public function it_is_initializable() {

        $this->shouldHaveType(SiteSystemOptionsAsXml::class);
    }

	public function it_converts_an_array_of_site_system_options_to_xml() {

		$this->format(['first_name'=>'test1', 'last_name'=>'test2'])->shouldReturn(

			'<SiteSystemOptions><SiteSystemOption option_id="FIRST_NAME" option_value="TEST1" /><SiteSystemOption option_id="LAST_NAME" option_value="TEST2" /></SiteSystemOptions>'
		);
	}

	public function it_implements_iformat_interface() {

		$this->shouldImplement(\AccountOnline\interfaces\format::class);
	}
}
