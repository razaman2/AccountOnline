<?php

namespace tests\AccountOnline;

use AccountOnline\Agency;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AgencySpec extends ObjectBehavior
{
	public function agency() {

		return '{
			"agencytypeid":"agency type id", 
			"phone1":"(201) 985-6623", 
			"agencyno":"agency no", 
			"agencyname":"agency name", 
			"cityname":"city name", 
			"stateid":"state id"
    	}';
	}

	public function let() {

		$this->beConstructedWith($this->agency(), new \Parser\Parser());
	}

    public function it_is_initializable() {

        $this->shouldHaveType(Agency::class);
    }

    public function it_can_access_agency_type_id_property() {

		$this->agencytypeid->shouldBeLike('agency type id');
    }

	public function it_can_parse_and_access_phone_1_property() {

		$this->phone1->shouldBeLike('2019856623');
	}

	public function it_can_access_agency_no_property() {

		$this->agencyno->shouldBeLike('agency no');
	}

	public function it_can_access_agency_name_property() {

		$this->agencyname->shouldBeLike('agency name');
	}

	public function it_can_access_city_name_property() {

		$this->cityname->shouldBeLike('city name');
	}

	public function it_can_access_state_id_property() {

		$this->stateid->shouldBeLike('state id');
	}
}
