<?php
declare(strict_types=1);

namespace Panth\CheckoutSuccess\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Registry;
use Magento\Sales\Model\OrderFactory;

class RegisterOrderInfo implements ObserverInterface
{
    private Registry $registry;
    private OrderFactory $orderFactory;

    public function __construct(
        Registry $registry,
        OrderFactory $orderFactory
    ) {
        $this->registry = $registry;
        $this->orderFactory = $orderFactory;
    }

    public function execute(Observer $observer): void
    {
        $orderIds = $observer->getEvent()->getOrderIds();
        if (empty($orderIds) || !is_array($orderIds)) {
            return;
        }

        $orderId = (int) reset($orderIds);
        if ($orderId && !$this->registry->registry('panth_checkout_success_order_id')) {
            $this->registry->register('panth_checkout_success_order_id', $orderId);
        }
    }
}
