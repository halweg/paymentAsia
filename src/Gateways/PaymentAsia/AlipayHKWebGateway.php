<?php
namespace Halweg\PaymentAsia\Gateways\PaymentAsia;

class AlipayHKWebGateway extends PaymentAsia
{
    protected function getNetWork()
    {
        return 'Alipay';
    }
    
    public function pay(array $config_biz = [])
    {
        parent::pay($config_biz);

        return $this->buildPayHtml();
    }
    
}
