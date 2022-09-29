<?php

namespace App\Modules\Order;

use App\Orm\ShardingStragegyInterace;

class OrderStorage implements OrderStorageInterface
{
    public function __construct(
        private ShardingStragegyInterace $shardingStragegy
    ) {}

    public function runQuery($query, Order $order): void
    {
        $connection = $this->shardingStragegy->getConnection($order);
        $connection->query($query);
    }

    public function insert(Order $order): int | string
    {
        //добавить запись и вернуть объект с id
        $this->runQuery("insert lalalal", $order);
        return mysqli_insert_id($this->shardingStragegy->getConnection($order));
    }

    public function update(Order $order): void
    {
        //обновить объект
        $this->runQuery("update lalala", $order);
    }

    public function delete(Order $order): void
    {
        //удалить объект
        $this->runQuery("delete lalalal", $order);
    }
}
