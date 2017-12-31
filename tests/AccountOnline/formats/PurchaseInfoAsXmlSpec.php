<?php

namespace tests\AccountOnline\formats;

use AccountOnline\formats\PurchaseInfoAsXml;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PurchaseInfoAsXmlSpec extends ObjectBehavior
{
    public function it_is_initializable() {

        $this->shouldHaveType(PurchaseInfoAsXml::class);
    }

	public function it_converts_an_array_of_purchase_info_to_xml() {

		$this->format([['first_name'=>'test1', 'last_name'=>'test2']])->shouldReturn(

			'<PurchaseInfo xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema"><first_name>test1</first_name><last_name>test2</last_name></PurchaseInfo>'
		);
	}
}
