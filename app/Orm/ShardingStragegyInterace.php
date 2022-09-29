<?php

namespace App\Orm;

use App\Modules\Order\Order;
use PDO;

interface ShardingStragegyInterace
{
    public function getConnection(Order $order): PDO;
}
