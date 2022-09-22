<?php

namespace App\Services;



class BubbleSort implements BubbleSortInterface
{

    public function sort(array $inputArray): array
    {
        $size = count($inputArray);

        do {
            $swapped = false;

            for ($i = 0; $i < $size - 1; $i++) {
                if ($inputArray[$i] > $inputArray[$i + 1]) {

                    $temp = $inputArray[$i];
                    $inputArray[$i] = $inputArray[$i + 1];
                    $inputArray[$i + 1] = $temp;

                    $swapped = true;
                }
            }

            $size--;
        } while ($swapped);

        return $inputArray;
    }
}
