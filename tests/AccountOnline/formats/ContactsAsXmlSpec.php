<?php

namespace tests\AccountOnline\formats;

use AccountOnline\formats\ContactsAsXml;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ContactsAsXmlSpec extends ObjectBehavior
{
    public function it_is_initializable() {

        $this->shouldHaveType(ContactsAsXml::class);
    }

	public function it_converts_an_array_of_contacts_to_xml() {

		$this->format([['first_name'=>'test1', 'last_name'=>'test2']])->shouldReturn(

			'<Contacts> <Contact first_name="test1" last_name="test2" /></Contacts>'
		);
	}

	public function it_implements_iformat_interface() {

		$this->shouldImplement(\AccountOnline\interfaces\IFormat::class);
	}
}
