<?php


namespace Marcgento\ModuloSchema\Model\ResourceModel;


class TablaCustom extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function _construct()
    {
        $this->_init('marcgento_tablacustom', 'entity_id');
    }
}
