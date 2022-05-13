<?php


namespace Marcgento\ModuloSchema\Model\ResourceModel\TablaCustom;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    public function _construct()
    {
        $this->_init('Marcgento\ModuloSchema\Model\TablaCustom', 'Marcgento\ModuloSchema\Model\ResourceModel\TablaCustom');
    }
}
