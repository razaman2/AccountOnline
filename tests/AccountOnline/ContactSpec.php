<?php

namespace tests\AccountOnline;

use AccountOnline\Contact;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ContactSpec extends ObjectBehavior
{
	public function contact() {

		return (new \Parser\Parser())->parse('{
			"firstname":"first name", 
			"pin":"pin", 
			"lastname":"last name", 
			"ctactypeid":"ctac type id", 
			"relationid":"relation id", 
			"authid":"auth id", 
			"contractsignerflag":"contract signer flag", 
			"haskeyflag":"has key flag", 
			"phone1":"(201) 551-8814", 
			"phonetypeid1":"phone type id 1", 
			"contltypeno":"contl type no"
		}');
	}

	public function let() {

		$this->beConstructedWith($this->contact());
	}

    public function it_is_initializable() {

        $this->shouldHaveType(Contact::class);
    }

    public function it_can_access_first_name_property() {

		$this->firstname->shouldBeLike('first name');
    }

	public function it_can_access_last_name_property() {

		$this->lastname->shouldBeLike('last name');
	}

	public function it_can_access_pin_property() {

		$this->pin->shouldBeLike('pin');
	}

	public function it_can_access_ctac_type_id_property() {

		$this->ctactypeid->shouldBeLike('ctac type id');
	}

	public function it_can_access_relation_id_property() {

		$this->relationid->shouldBeLike('relation id');
	}

	public function it_can_access_auth_id_property() {

		$this->authid->shouldBeLike('auth id');
	}

	public function it_can_access_contract_signer_flag_property() {

		$this->contractsignerflag->shouldBeLike('contract signer flag');
	}

	public function it_can_access_default_contract_signer_flag_property() {

		$this->beConstructedWith((new \Parser\Parser())->parse('{"":""}'));
		$this->contractsignerflag->shouldBeLike('N');
	}

	public function it_can_access_has_key_flag_property() {

		$this->haskeyflag->shouldBeLike('has key flag');
	}

	public function it_can_access_default_has_key_flag_property() {

		$this->beConstructedWith((new \Parser\Parser())->parse('{"":""}'));
		$this->haskeyflag->shouldBeLike('N');
	}

	public function it_can_parse_and_access_phone_1_property() {

		$this->phone1->shouldBeLike('2015518814');
	}

	public function it_can_access_phone_type_id_1_property() {

		$this->phonetypeid1->shouldBeLike('phone type id 1');
	}

	public function it_can_access_contl_type_no_property() {

		$this->contltypeno->shouldBeLike('contl type no');
	}

	public function it_can_return_an_array_of_properties() {

		$this->data()->shouldBeArray();
	}

	public function it_should_only_have_keys_that_have_value() {

		$this->beConstructedWith((new \Parser\Parser())->parse('{"":""}'));
		$this->data()->shouldHaveKey('contract_signer_flag');
		$this->data()->shouldHaveKey('has_key_flag');
		$this->data()->shouldNotHaveKey('auth_id');
	}

	public function it_should_have_keys_for_values_that_have_been_set() {

		$this->beConstructedWith((new \Parser\Parser())->parse('{"relationid":"mother", "phone1":"(201) 944-8841"}'));
		$this->data()->shouldHaveKeyWithValue('phone1', '2019448841');
		$this->data()->shouldHaveKeyWithValue('relation_id', 'mother');
	}
}
