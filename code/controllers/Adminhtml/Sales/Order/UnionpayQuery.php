<?php
class CosmoCommerce_Unionpay_Adminhtml_Sales_Order_EditController extends Mage_Adminhtml_Controller_Action
{
    public function queryAction()
    {
        $orderId = $this->getRequest()->getParam('order_id');
        $order = Mage::getModel('sales/order')->load($orderId);
        
        if ($order->getId()) {
            $this->_redirect('admin/sales_order');
        }
        else {
            $this->_redirect('admin/sales_order/');
        }
        echo 'af';
        exit();
    }

}
