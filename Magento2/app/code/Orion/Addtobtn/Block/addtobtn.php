<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Orion\Addtobtn\Block;
//use Orion\Addtobtn\Helper\Data;

class addtobtn extends \Magento\Framework\View\Element\Template
{
   /**
     * @var \My\Module\Helper\Data
   */
  
   protected $scopeConfig;
 /**
 * @param \Magento\Framework\View\Element\Template\Context $context
 * @param \My\Module\Helper\Data $dataHelper
 * @param array $data
 */
public function __construct(
    \Magento\Framework\View\Element\Template\Context $context,
    \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
    \Magento\Customer\Model\Session $customerSession,
    array $data = []
    ) {
       
        $this->scopeConfig = $scopeConfig;
        $this->customerSession = $customerSession;
        parent::__construct($context, $data);
    }
    const MODULE_ENABLE = "addtocartsection/general/enable";
    public function getDefaultConfig($path)
       {
           return $this->scopeConfig->getValue($path, \Magento\Framework\App\Config\ScopeConfigInterface::SCOPE_TYPE_DEFAULT);
       }
    public function isModuleEnabled()
       {
           //return (bool) $this->getDefaultConfig(self::MODULE_ENABLE);
          $configval = (bool)$this->getDefaultConfig(self::MODULE_ENABLE);
          if($configval==1){
             $session=(bool)$this->customerSession->isLoggedIn();
                if($session==1){
                    return 1;
                }
                else{
                    return 0;
                }
          }
          else{
            return 2;
          }

       }
   
}
?>

