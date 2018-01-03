<?php

namespace tests\AccountOnline;

use AccountOnline\PurchaseInfo;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PurchaseInfoSpec extends ObjectBehavior
{
	public function purchaseInfo() {

		return (new \Parser\Parser())->parse('{
			"CS":"cs", 
			"RMR":"rmr", 
			"DealerId":"dealer id", 
			"UserId":"user id", 
			"LastUpdated":"last updated", 
			"Source":"source"
		}');
	}

	public function let() {

		$this->beConstructedWith($this->purchaseInfo());
	}

    public function it_is_initializable() {

        $this->shouldHaveType(PurchaseInfo::class);
    }

    public function it_can_access_cs_property() {

		$this->CS->shouldBeLike('cs');
    }

	public function it_can_access_rmr_property() {

		$this->RMR->shouldBeLike('rmr');
	}

	public function it_can_access_dealer_id_property() {

		$this->DealerId->shouldBeLike('dealer id');
	}

	public function it_can_access_user_id_property() {

		$this->UserId->shouldBeLike('user id');
	}

	public function it_can_access_last_updated_property() {

		$this->LastUpdated->shouldBeLike('last updated');
	}

	public function it_can_access_source_property() {

		$this->Source->shouldBeLike('source');
	}
}
