<?php


namespace Marcgento\ModuloSchema\Controller\Index;


class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;
    protected $tablaCustomFactory;

    public function __construct(
        \Marcgento\ModuloSchema\Model\TablaCustomFactory $tablaCustomFactory,
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ){
        $this->tablaCustomFactory = $tablaCustomFactory;
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     * Index action
     *
     * @return $this
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        //$this->insertarRegistro();
        //$this->deleteRegistro($id);
        //$this->updateRegistro($id);
        $data = $this->dataCollection();
        foreach($data as $_item){
            echo "<pre>";
            var_dump($_item->getData());
            echo "</pre>";
        }
        return $resultPage;
    }

    public function insertarRegistro()
    {
        $tablaCustomModel = $this->_objectManager->create('Marcgento\ModuloSchema\Model\TablaCustom');
        $tablaCustomModel->setNombre('TercerNombre');
        $tablaCustomModel->setFechaRegistro(date("Y-m-d H:s:i"));
        $tablaCustomModel->setEstatus(1);
        $tablaCustomModel->setIsVisible(0);
        $tablaCustomModel->save();
        $this->getResponse()->setBody('success');
    }

    public function deleteRegistro($id)
    {
        $tablaCustom = $this->_objectManager->create('Marcgento\ModuloSchema\Model\TablaCustom');
        $tablaCustom->load($id);
        $tablaCustom->delete();
        $this->getResponse()->setBody("El registro se ha eliminado");
    }

    public function updateRegistro($id)
    {
        $tablaCustom = $this->_objectManager->create('Marcgento\ModuloSchema\Model\TablaCustom');
        $tablaCustom->load($id);
        $tablaCustom->setData('nombre', 'ActualizandoNombre');
        $tablaCustom->save();
        $this->getResponse()->setBody("El registro ha sido actualizado");
    }

    public function dataCollection()
    {
        $data = $this->tablaCustomFactory->create();
        $collection = $data->getCollection();
        return $collection;
    }

}
