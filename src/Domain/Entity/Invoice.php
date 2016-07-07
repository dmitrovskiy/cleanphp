<?php

namespace CleanPhp\Invoicer\Domain\Entity;

class Invoice
{
    protected $order;
    protected $invoiceDate;
    protected $total;

    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    public function getOrder()
    {
        return $this->order;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setInvoiceDate($invoiceDate)
    {
        $this->invoiceDate = $invoiceDate;
        return $this;
    }

    public function setOrder($order)
    {
        $this->order = $order;
        return $this
    }

    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }
}