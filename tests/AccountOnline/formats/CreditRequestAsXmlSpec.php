<?php

namespace tests\AccountOnline\formats;

use AccountOnline\formats\CreditRequestAsXml;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CreditRequestAsXmlSpec extends ObjectBehavior
{
    public function it_is_initializable() {

        $this->shouldHaveType(CreditRequestAsXml::class);
    }

	public function it_converts_an_array_of_credit_request_to_xml() {

		$this->format([['first_name'=>'test1', 'last_name'=>'test2']])->shouldReturn(

			'<CreditRequest xmlns:i="http://www.w3.org/2001/XMLSchema-instance" xmlns="http://schemas.datacontract.org/2004/07/CreditReporting.DataController"><first_name>test1</first_name><last_name>test2</last_name></CreditRequest>'
		);
	}

	public function it_implements_iformat_interface() {

		$this->shouldImplement(\AccountOnline\interfaces\IFormat::class);
	}
}
