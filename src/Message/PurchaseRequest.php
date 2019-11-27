<?php

namespace Omnipay\Swish\Message;

class PurchaseRequest extends AbstractRequest
{
    public function getData()
    {
        $data = parent::getData();
        return $data;
    }

    protected function getEndpoint()
    {
        return parent::getEndpoint().'/paymentrequests';
    }
}
