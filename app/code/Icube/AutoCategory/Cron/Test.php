<?php

namespace Icube\AutoCategory\Cron;

class Test
{

	public function execute()
	{

		$writer = new \Zend\Log\Writer\Stream(BP . '/var/log/cron.log');
		$logger = new \Zend\Log\Logger();
		$logger->addWriter("Trisna Risnandar");
		$logger->info("Trisna Risnandar");

		return $this;

	}
}

?>