<?php

namespace Jarvus\LaravelQuickBooks\Resources;

use Jarvus\LaravelQuickBooks\QuickBooksResource;
use QuickBooksOnline\API\Facades as QuickBooksFacades;

class PurchaseOrder extends QuickBooksResource
{
    /**
     * The name of this resource.
     *
     * @var string
     */
    protected $name = 'PurchaseOrder';

    /**
     * QuickBooks Online API Facade
     *
     * @var string
     */
    protected $facade = QuickBooksFacades\PurchaseOrder::class;
}