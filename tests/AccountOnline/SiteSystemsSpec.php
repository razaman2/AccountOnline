<?php

namespace tests\AccountOnline;

use AccountOnline\SiteSystems;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SiteSystemsSpec extends ObjectBehavior
{
	public function siteSystems() {

		return '{
			"cityname":"city name", 
			"codeword1":"code word 1", 
			"countyname":"county name", 
			"crossstreet":"cross street", 
			"installservcono":"install servco no", 
			"langid":"lang id", 
			"phone1":"(718) 583-3250", 
			"servcono":"servco no", 
			"siteaddr1":"site addr 1", 
			"sitename":"jOHn bOb", 
			"sitestatid":"sitestat id", 
			"sitetypeid":"site type id", 
			"stateid":"state id", 
			"systypeid":"sys type id", 
			"secsystypeid":"sec sys type id", 
			"twowaydeviceid":"twoway device id", 
			"subdivision":"subdivision", 
			"receiverphone":"(917) 234-8814", 
			"panelphone":"(908) 541-2288", 
			"panellocation":"panel location", 
			"installdate":"install date", 
			"panelcode":"panel code", 
			"zipcode":"zip code"
		}';
	}

	public function let() {

		$this->beConstructedWith($this->siteSystems(), new \Parser\Parser());
	}

    public function it_is_initializable() {

        $this->shouldHaveType(SiteSystems::class);
    }

    public function it_can_parse_and_access_phone_1_property() {

		$this->phone1->shouldBeLike('7185833250');
    }

	public function it_can_parse_and_access_panel_phone_property() {

		$this->panelphone->shouldBeLike('9085412288');
	}

	public function it_can_parse_and_access_receiver_phone_property() {

		$this->receiverphone->shouldBeLike('9172348814');
	}

	public function it_can_access_city_name_property() {

		$this->cityname->shouldBeLike('city name');
	}

	public function it_can_access_codeword_1_property() {

		$this->codeword1->shouldBeLike('code word 1');
	}

	public function it_can_access_county_name_property() {

		$this->countyname->shouldBeLike('county name');
	}

	public function it_can_access_cross_street_property() {

		$this->crossstreet->shouldBeLike('cross street');
	}

	public function it_can_access_install_service_co_no_property() {

		$this->installservcono->shouldBeLike('install servco no');
	}

	public function it_can_access_lang_id_property() {

		$this->langid->shouldBeLike('lang id');
	}

	public function it_can_access_serv_co_no_property() {

		$this->servcono->shouldBeLike('servco no');
	}

	public function it_can_access_site_addr_1_property() {

		$this->siteaddr1->shouldBeLike('site addr 1');
	}

	public function it_can_format_and_access_site_name_property() {

		$this->sitename->shouldBeLike('John Bob');
	}

	public function it_can_access_site_stat_id_property() {

		$this->sitestatid->shouldBeLike('sitestat id');
	}

	public function it_can_access_site_type_id_property() {

		$this->sitetypeid->shouldBeLike('site type id');
	}

	public function it_can_access_state_id_property() {

		$this->stateid->shouldBeLike('state id');
	}

	public function it_can_access_sys_type_id_property() {

		$this->systypeid->shouldBeLike('sys type id');
	}

	public function it_can_access_sec_sys_type_id_property() {

		$this->secsystypeid->shouldBeLike('sec sys type id');
	}

	public function it_can_access_twoway_device_id_property() {

		$this->twowaydeviceid->shouldBeLike('twoway device id');
	}

	public function it_can_access_subdivision_property() {

		$this->subdivision->shouldBeLike('subdivision');
	}

	public function it_can_access_panel_location_property() {

		$this->panellocation->shouldBeLike('panel location');
	}

	public function it_can_access_install_date_property() {

		$this->installdate->shouldBeLike('install date');
	}

	public function it_can_access_panel_code_property() {

		$this->panelcode->shouldBeLike('panel code');
	}

	public function it_can_access_zip_code_property() {

		$this->zipcode->shouldBeLike('zip code');
	}
}
