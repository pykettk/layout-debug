<?php
namespace Element119\LayoutDebug\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Zend\Log\Logger;
use Zend\Log\Writer\Stream;

class LayoutDebug implements ObserverInterface
{
    /**
     * @param Observer $observer
     * @return $this|void
     */
    public function execute(Observer $observer)
    {
        $logger = new Logger();

        $logger->addWriter(new Stream(BP . '/var/log/layout.log'));
        $logger->info($observer->getEvent()->getLayout()->getXmlString());

        return $this;
    }
}
