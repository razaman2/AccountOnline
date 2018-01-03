<?php

namespace tests\AccountOnline;

use AccountOnline\CreditRequest;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CreditRequestSpec extends ObjectBehavior
{
	public function creditRequest() {

		return (new \Parser\Parser())->parse('{
			"CS":"cs", 
			"SSN":"000-00-0000", 
			"FirstName":"first name", 
			"LastName":"last name", 
			"StreetNumber":"street number", 
			"StreetName":"street name", 
			"City":"city", 
			"State":"state", 
			"Zip":"zip", 
			"DealerId":"dealer id", 
			"UserId":"user id", 
			"FICO":"fico", 
			"RequestDate":"request date", 
			"TransactionID":"transaction id", 
			"Token":"token",
			"BureauID":"xpn"
		}');
	}

	public function let() {

		$this->beConstructedWith($this->creditRequest());
	}

    public function it_is_initializable() {

        $this->shouldHaveType(CreditRequest::class);
    }

    public function it_can_access_cs_property() {

		$this->CS->shouldBeLike('cs');
    }

	public function it_can_parse_and_access_ssn_property() {

		$this->SSN->shouldBeLike('000000000');
	}

	public function it_can_access_first_name_property() {

		$this->FirstName->shouldBeLike('first name');
	}

	public function it_can_access_last_name_property() {

		$this->LastName->shouldBeLike('last name');
	}

	public function it_can_access_street_number_property() {

		$this->StreetNumber->shouldBeLike('street number');
	}

	public function it_can_access_street_name_property() {

		$this->StreetName->shouldBeLike('street name');
	}

	public function it_can_access_city_property() {

		$this->City->shouldBeLike('city');
	}

	public function it_can_access_state_property() {

		$this->State->shouldBeLike('state');
	}

	public function it_can_access_zip_property() {

		$this->Zip->shouldBeLike('zip');
	}

	public function it_can_access_dealer_id_property() {

		$this->DealerId->shouldBeLike('dealer id');
	}

	public function it_can_access_user_id_property() {

		$this->UserId->shouldBeLike('user id');
	}

	public function it_can_access_fico_property() {

		$this->FICO->shouldBeLike('fico');
	}

	public function it_can_access_request_date_property() {

		$this->RequestDate->shouldBeLike('request date');
	}

	public function it_can_access_transaction_id_property() {

		$this->TransactionID->shouldBeLike('transaction id');
	}

	public function it_can_access_token_property() {

		$this->Token->shouldBeLike('token');
	}

	public function it_can_parse_and_access_bureau_id_property() {

		$this->BureauID->shouldBeLike('7');
	}
}
