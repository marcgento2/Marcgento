<?php


namespace Marcgento\ModuloBasico\Model\ResourceModel;


class Subscription extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function _construct()
    {
        $this->_init('marcgento_subscription', 'subscription_id');
    }
}
