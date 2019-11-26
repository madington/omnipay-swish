<?php

namespace \Message;

class PurchaseRequest extends AbstractRequest
{
    public function getData()
    {
        $data = parent::getData();

        $data['specialmessage'] = 'madington';

        return $data;
    }

    protected function getEndpoint()
    {
        return parent::getEndpoint().'/paymentrequests';
    }
}
