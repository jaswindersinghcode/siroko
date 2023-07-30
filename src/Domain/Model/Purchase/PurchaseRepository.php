<?php

namespace CodeChallenge\Domain\Model\Purchase;

interface PurchaseRepository
{
    public function add(Purchase $purchase): bool;
}
