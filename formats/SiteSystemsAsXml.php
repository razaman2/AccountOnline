<?php

	namespace AccountOnline\formats;

	use AccountOnline\interfaces\IFormat;

	class SiteSystemsAsXml implements IFormat
	{
		public function format(array $data)
		{
			$siteSystems = "";

			foreach($data as $obj)
			{
				$siteSystem = "<SiteSystem ";

				foreach($obj as $key => $val)
				{
					if($val !== null)
					{
						$siteSystem .= $key."=\"$val\" ";
					}
				}

				$siteSystems .= $siteSystem."/>";
			}

			return '<SiteSystems> '.$siteSystems.'</SiteSystems>';
		}
	}