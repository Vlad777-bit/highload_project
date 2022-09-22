<?php

namespace App\Http\Controllers;


use App\Services\BubbleSortInterface;
use Illuminate\Routing\Controller as BaseController;
use Psr\Log\LoggerInterface;
use Throwable;

class BubbleSortController extends BaseController
{
   public function __construct(
       private LoggerInterface $logger,
       private BubbleSortInterface $bubbleSort
   )
   {
   }

    public function list()
    {
        try {
            $inputArr = [123, 2, 45, 564, 6, 65, 78, 3, 23, 78];

            $timeStart = time();

            $this->bubbleSort->sort($inputArr);

            $timeEnd = time();

            $this->logger->debug($timeEnd - $timeStart);
            $this->logger->debug(memory_get_usage());
        } catch (Throwable $error)
        {
            $this->logger->error("Произошла ошибка: ". $error->getMessage());
        }
    }
}
