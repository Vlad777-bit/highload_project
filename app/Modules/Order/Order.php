<?php

namespace App\Modules\Order;

class Order
{
    public function __construct(
//        public $id,
        public $name,
        public $date,
        public $userId,
        public $sum,
    ) {}
}
