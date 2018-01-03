<?php

namespace tests\AccountOnline;

use AccountOnline\Zone;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ZoneSpec extends ObjectBehavior
{
	public function zone() {

		return (new \Parser\Parser())->parse('{
    	    "zonecomment":"front door", 
    	    "eventid":"1400", 
    	    "equiplocid":"kit", 
    	    "equiptypeid":"dsr", 
    	    "zoneid":"1", 
    	    "zonestateid":"existing"
    	}');
	}

	public function let() {

		$this->beConstructedWith($this->zone());
	}

    public function it_is_initializable() {

        $this->shouldHaveType(Zone::class);
    }

	public function it_can_access_zone_comment_property() {

		$this->zonecomment->shouldBeLike('front door');
	}

	public function it_can_access_event_id_property() {

		$this->eventid->shouldBeLike('1400');
	}

	public function it_can_access_equip_loc_id_property() {

		$this->equiplocid->shouldBeLike('kit');
	}

	public function it_can_access_equip_type_id_property() {

		$this->equiptypeid->shouldBeLike('dsr');
	}

	public function it_can_access_zone_id_property() {

		$this->zoneid->shouldBeLike('1');
	}

	public function it_can_access_zone_state_id_property() {

		$this->zonestateid->shouldBeLike('existing');
	}

	public function it_can_access_default_equip_loc_id_property() {

		$this->beConstructedWith((new \Parser\Parser())->parse('{"":""}'));
		$this->equiplocid->shouldBeLike('OTHR');
	}

	public function it_can_access_default_zone_state_id_property() {

		$this->beConstructedWith((new \Parser\Parser())->parse('{"":""}'));
		$this->zonestateid->shouldBeLike('A');
	}
}
