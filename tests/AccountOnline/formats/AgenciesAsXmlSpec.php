<?php

namespace tests\AccountOnline\formats;

use AccountOnline\formats\AgenciesAsXml;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AgenciesAsXmlSpec extends ObjectBehavior
{
    public function it_is_initializable() {

        $this->shouldHaveType(AgenciesAsXml::class);
    }

    public function it_converts_an_array_of_agencies_to_xml() {

    	$this->format([['first_name'=>'test1', 'last_name'=>'test2']])->shouldReturn(

    		'<SiteAgencyPermits> <SiteAgencyPermit first_name="test1" last_name="test2" /></SiteAgencyPermits>'
	    );
    }

    public function it_implements_iformat_interface() {

    	$this->shouldImplement(\AccountOnline\interfaces\IFormat::class);
    }
}
