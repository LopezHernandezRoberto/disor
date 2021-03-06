<?php

class ActiveHyperLinkTestCase extends PradoGenericSelenium2Test
{
	function test()
	{
		$base='ctl0_Content_';
		$this->url("active-controls/index.php?page=ActiveHyperLinkTest");
		$this->assertSourceContains("Active HyperLink Test Case");

		$this->assertText("{$base}link1", "Link 1");

		$this->byId("{$base}button1")->click();
		$this->pause(800);
		$this->assertText("{$base}link1", "Prado framework");
	}
}
