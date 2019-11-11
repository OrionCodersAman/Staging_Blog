<?php
namespace Orion\BestProduct\Block;
class DisplayProduct extends \Magento\Framework\View\Element\Template
{
   
    protected $_productsFactory;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Reports\Model\ResourceModel\Product\CollectionFactory $productsFactory,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, 
        \Magento\Catalog\Block\Product\ListProduct $listProductAddtobtn,
        array $data = []
    ) {
        $this->_productsFactory = $productsFactory;
        $this->listProductAddtobtn = $listProductAddtobtn;
        $this->_productCollectionFactory = $productCollectionFactory;
        parent::__construct($context, $data);
    }
    
    /**
     * Getting most viewed products
     */
    public function getCollection()
    {

        $currentStoreId = $this->_storeManager->getStore()->getId();

        $collection = $this->_productsFactory->create()
        ->addAttributeToSelect('*')->addViewsCount()->setStoreId($currentStoreId )->addStoreFilter( $currentStoreId
        );
        $collection->setPageSize(8);
    return $collection;
    }
     public function getAddToCartPostParams($product)
    {
        return $this->listProductAddtobtn->getAddToCartPostParams($product);
    }
}
